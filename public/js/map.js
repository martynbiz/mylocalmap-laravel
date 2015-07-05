var map = map || (function() {
    
    // private 
    
    var _map;

    var _markers = {};
    
    // to compenstate for the filters menu, we will offset the map
    var _offset = {
        lat: 0,
        lng: -3
    };
    
    // start center when map loads
    var _startCenter = {
        lat: (54.4 + _offset.lat),
        lng: (-3.4 + _offset.lng)
    };

    function _initialize() {

        // initiate the map
        _map = new google.maps.Map( document.getElementById("map"), {
            center: new google.maps.LatLng(_startCenter.lat, _startCenter.lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoom: 6
        } );
        
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
            _loadMarkers();
        });

        // set *_changed events so that markers are re-loaded when
        // the map changes
        google.maps.event.addListener(_map,'idle',function() {
            _loadMarkers();
        });
    };

    function _loadMarkers() {

        // only get points if zoomed enough in
        if (_map.getZoom() < 10)
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
                  var latLng = new google.maps.LatLng(listing.loc[1], listing.loc[0]);

                  // Creating a marker if not previously loaded
                  if (!_markers[listing._id]) {
                      var marker = new google.maps.Marker({
                        position: latLng,
                        map: _map,
                        title: listing.name
                      });
                      
                      _markers[listing._id] = marker;

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

               });
            }
        });
    }

    function _moveToLocation(lat, lng, zoom) {
        var center = new google.maps.LatLng(lat, lng);

        // using global variable:
        _map.panTo(center);
        _map.setZoom(11);
    }
    
    // public
    
    return {
        initialize: _initialize
    };
    
})();