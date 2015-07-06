
var map = map || (function() {

    // private

    var _map;

    var _markers = {};

    // start center when map loads
    var _startCenter = {
        lat: 54.4,
        lng: -3.4,
    };

    var _zoomMax = 10

    function _init() {

        var container = document.getElementById("map");

        switch ($(container).data('type')) {
            case 'single':

                // display a single marker

                // get the listing data from the attribute
                var listing = $(container).data('listing');

                // initiate the map
                _initMapObject(container, {
                    zoom: 18,
                    lat: listing.loc[1],
                    lng: listing.loc[0],
                });

                // set the map
                _setMarker(listing, {
                    infowindow: false,
                    draggable: $(container).data('draggable') ? true : false,
                    animation: $(container).data('draggable') ? google.maps.Animation.DROP : null
                });

                break;
            case 'multi':
            default:

                // prepare the map for multi show (e.g. homepage)

                // initiate the map
                _initMapObject(container, {
                    zoom: 6
                });

                /// prepare filters

                // set region/city select to move to location when
                // changed. we can rely on "idle" event listener to
                // reload _markers
                $('.filters select[name="city"]').on("change", function() {
                    var lat = $(this).find(':selected').data('lat'),
                        lng = $(this).find(':selected').data('lng');
                    _moveToLocation(lat, lng);
                });

                // set region/city select to move to location when
                // changed
                $('.filters .groups .tags input[type="checkbox"]').on("change", function() {
                    _removeMarkers();
                    _loadMarkers();
                });

                // set *_changed events so that markers are re-loaded when
                // the map changes
                google.maps.event.addListener(_map,'idle',function() {
                    if ($(container).data('cluster')) {
                        _loadMarkerCluster();
                    } else {
                        _loadMarkers();
                    }
                });

        }

    }

    /**
     * This will set the map objects to the values passed in
     * @param DOMelement container The DOM element of the map container
     * @param Object options Options from the map (e.g. zoom, lat, lng)
     */
    function _initMapObject(container, options) {

        // set default
        var options = $.extend({
            lat: _startCenter.lat,
            lng: _startCenter.lng,
            zoom: 6
        }, options);

        // set object
        _map = new google.maps.Map( container, {
            center: new google.maps.LatLng(options.lat, options.lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoom: options.zoom
        } );

    }

    function _loadMarkers() {

        // only get points if zoomed enough in
        if (_zoomMax && _map.getZoom() < _zoomMax)
            return false;

        // set data to send to api
        var data = {
            bounds: _map.getBounds().toUrlValue(),
            tags: (function() {
                // return the ids of all checkboxes as tags
                var tags = [];
                $(".filters .groups .tags input[type='checkbox']:checked").each(function(index, value) {
                    tags.push($(value).val());
                });
                return tags
            })()
        };

        // load markers
        $.ajax({
            url: "/listings",
            method: "GET",
            data: data,
            success: function(data) {
                $(data['listings']).each(function(index, listing) {
                    _setMarker(listing);
                });
            }
        });
    }

    function _loadMarkerCluster() {

        // // only get points if zoomed enough in
        // if (_zoomMax && _map.getZoom() < _zoomMax)
        //     return false;

        // set data to send to api
        var data = _getFilterData();

        // load markers
        $.ajax({
            url: "/listings",
            method: "GET",
            data: data,
            success: function(data) {

                var latLng, options;

                // reset markers
                _markers = [];

                // loop through each data and build _markers array
                $(data['listings']).each(function(index, listing) {
                    _markers.push( new google.maps.Marker({
                        'position': new google.maps.LatLng(listing.loc[1], listing.loc[0])
                    }) );
                });

                var markerCluster = new MarkerClusterer(_map, _markers, {
                    gridSize: 60,
                });
            }
        });
    }


    function _getFilterData() {

        // set data to send to api
        return {
            bounds: _map.getBounds().toUrlValue(),
            tags: (function() {
                // return the ids of all checkboxes as tags
                var tags = [];
                $(".filters .groups .tags input[type='checkbox']:checked").each(function(index, value) {
                    tags.push($(value).val());
                });
                return tags
            })()
        };
    }

    function _setMarker(listing, options) {

        // set default
        var options = $.extend({
            infowindow: true,
            draggable: false,
            animation: null,
        }, options);

        var latLng = new google.maps.LatLng(listing.loc[1], listing.loc[0]);

        // Creating a marker if not previously loaded
        if (!_markers[listing._id]) {

            var marker = new google.maps.Marker({
                position: latLng,
                map: _map,
                title: listing.name,
                draggable: options.draggable,
                animation: options.animation
            });

            _markers[listing._id] = marker;

            if (options.infowindow) {
                // create the info window
                var contentString = '<div class="infowindow">'+
                    '<h2>'+listing["name"]+'</h2>'+
                    '<p class="rating">'+
                        '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' +
                        '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' +
                        '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' +
                        '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' +
                        '<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>' +
                    '</p>'+
                    '<p>'+listing["description_short"]+'</p>'+
                    '<p>'+listing["address"]+'</p>'+
                    '<p><a href="/listings/'+listing["_id"]+'">Go to page</a></p>'+
                '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(_map, marker);
                });
            }

            // if draggable, set to draggable
            if (options.draggable) {
                google.maps.event.addListener(marker, 'dragend', function() {
                    $("input[name='loc[1]']").val(marker.getPosition().lat());
                    $("input[name='loc[0]']").val(marker.getPosition().lng());
                });
            }

        }
    }

    function _moveToLocation(lat, lng, zoom) {

        var center = new google.maps.LatLng(lat, lng);

        // using global variable:
        _map.panTo(center);
        _map.setZoom(11);
    }

    /**
     * This is to remove all markers from the map. Used
     * when we need to redraw (e.g. set tag filters, not move)
     */
    function _removeMarkers() {

        // remove marker
        for (var i in _markers) {
            _markers[i].setMap(null);
        }

        // empty _markers
        _markers = {};
    }

    // public

    return {
        init: _init
    };

})();
