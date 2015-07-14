window.mapController = window.mapController || (->

    # @var object Our map object
    _map = null

    # @var object Store loaded markers here
    _markers = {}

    # @var object Where to center the map on load
    _startCenter = {
        lat: 54.4,
        lng: -3.4,
    }

    # @var integer When to start loading markers
    _zoomMax = 10



    # called when initiating the map
    _init = () ->

        container = document.getElementById("map")

        # check what kind of map we're displaying: single, multi (marker), etc
        switch $(container).data('type')
            when 'single'
                listing = $(container).data('listing')

                # initiate the map
                _initMapObject container, {
                    zoom: 18,
                    lat: listing.loc[1],
                    lng: listing.loc[0],
                }

                # set the map
                _setMarker listing, {
                    infowindow: false,
                    draggable: if $(container).data('draggable') then true else false,
                    animation: if $(container).data('draggable') then google.maps.Animation.DROP else null
                }
            when 'multi'
            else

                _initMapObject container, {
                    zoom: 6
                }

                # prepare filters

                # set region/city select to move to location when
                # dragged. we can rely on "idle" event listener to
                # reload _markers
                $('.filters select[name="city"]').on "change", () ->
                    lat = $(this).find(':selected').data('lat')
                    lng = $(this).find(':selected').data('lng')
                    _moveToLocation(lat, lng)

                # set region/city select to move to location when
                # tags changed DELETED filter markers on front end instead
                $('.filters .groups .tags input[type="checkbox"]').on "change", () ->
                    console.log 'todo: filter markers based on tags'

                # set *_changed events so that markers are re-loaded when
                # the map changes
                google.maps.event.addListener _map,'idle', () ->
                    if $(container).data('cluster')
                        _loadMarkerCluster();
                    else
                        _loadMarkers()


    # This will set the map objects to the values passed in
    # @param DOMelement container The DOM element of the map container
    # @param Object options Options from the map (e.g. zoom, lat, lng)
    _initMapObject = (container, options) ->

        # set default
        options = $.extend {
            lat: _startCenter.lat,
            lng: _startCenter.lng,
            zoom: 6
        }, options

        # set object
        _map = new google.maps.Map container, {
            center: new google.maps.LatLng(options.lat, options.lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoom: options.zoom
        }


    # pan the map to a given lat/lgn/zoom
    # @param float lat Latitude value
    # @param float lng Longitude value
    # @param integer zoom Zoom value
    _moveToLocation = (lat, lng, zoom) ->

        center = new google.maps.LatLng(lat, lng)

        # using global variable:
        _map.panTo center
        _map.setZoom 11


    # load markets for the bounds
    _loadMarkers = () ->

        # only get points if zoomed enough in
        if (_zoomMax && _map.getZoom() < _zoomMax) then return false;

        # set data to send to api
        data = {
            bounds: _map.getBounds().toUrlValue(),
        }

        # load markers
        $.ajax {
            url: "/listings",
            method: "GET",
            data: data,
            success: (data) ->

                # return the ids of all checkboxes as tags
                tags = []
                $(".filters .groups .tags input[type='checkbox']:checked").each (index, value) ->
                    tags.push $(value).val()

                # filter the tags
                console.log('todo: filter markers based on tags')

                _setMarker listing for listing in data['listings']
        }


     # load marker cluster
     _loadMarkerCluster = () ->

         # set data to send to api
         data = _getFilterData()

         # load markers
         $.ajax {
             url: "/listings",
             method: "GET",
             data: data,
             success: (data) ->

                 # reset markers
                 _markers = [];

                 # loop through each data and build _markers array
                 $(data['listings']).each (index, listing) ->
                     _markers.push new google.maps.Marker {
                         'position': new google.maps.LatLng(listing.loc[1], listing.loc[0])
                     }

                 markerCluster = new MarkerClusterer _map, _markers, {
                     gridSize: 60,
                 }
         }


     # get the checked filter boxes as an array
     _getFilterData = () ->

         # set data to send to api
         return {
             bounds: _map.getBounds().toUrlValue(),
             tags: (->
                 # return the ids of all checkboxes as tags
                 tags = []
                 $ ".filters .groups .tags input[type='checkbox']:checked").each( (index, value) ->
                     tags.push($(value).val());

                 #return tags
             )()
         }


     # set a single marker
     # @param object listing A single listing
     # @param object options Options for the marker
     _setMarker = (listing, options) ->

         # set default
         options = $.extend {
             infowindow: true,
             draggable: false,
             animation: null,
         }, options

         latLng = new google.maps.LatLng listing.loc[1], listing.loc[0]

         # Creating a marker if not previously loaded
         if (!_markers[listing._id])
             marker = new google.maps.Marker {
                 position: latLng,
                 map: _map,
                 title: listing.name,
                 draggable: options.draggable,
                 animation: options.animation
             }

             _markers[listing._id] = marker;

             if (options.infowindow)

                 # create the info window
                 contentString = '<div class="infowindow">'+
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
                 '</div>'

                 infowindow = new google.maps.InfoWindow {
                     content: contentString
                 }

                 google.maps.event.addListener marker, 'click', () ->
                     infowindow.open(_map, marker)

                 # if draggable, set to draggable
                 if (options.draggable)
                     google.maps.event.addListener marker, 'dragend', () ->
                        $("input[name='loc[1]']").val(marker.getPosition().lat())
                        $("input[name='loc[0]']").val(marker.getPosition().lng())


     # This is to remove all markers from the map. Used
     # when we need to redraw (e.g. set tag filters, not move)
     _removeMarkers = () ->

         # remove marker
         _markers[i].setMap(null) for i in _markers

         # empty _markers
         _markers = {};

     # public
     return {
         init: _init
     }
)()
