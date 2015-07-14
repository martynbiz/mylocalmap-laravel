(function() {
  window.mapController = window.mapController || (function() {
    var _getFilterData, _init, _initMapObject, _loadMarkerCluster, _loadMarkers, _map, _markers, _moveToLocation, _removeMarkers, _setMarker, _startCenter, _zoomMax;
    _map = null;
    _markers = {};
    _startCenter = {
      lat: 54.4,
      lng: -3.4
    };
    _zoomMax = 10;
    _init = function() {
      var container, listing;
      container = document.getElementById("map");
      switch ($(container).data('type')) {
        case 'single':
          listing = $(container).data('listing');
          _initMapObject(container, {
            zoom: 18,
            lat: listing.loc[1],
            lng: listing.loc[0]
          });
          return _setMarker(listing, {
            infowindow: false,
            draggable: $(container).data('draggable') ? true : false,
            animation: $(container).data('draggable') ? google.maps.Animation.DROP : null
          });
        case 'multi':
          break;
        default:
          _initMapObject(container, {
            zoom: 6
          });
          $('.filters select[name="city"]').on("change", function() {
            var lat, lng;
            lat = $(this).find(':selected').data('lat');
            lng = $(this).find(':selected').data('lng');
            return _moveToLocation(lat, lng);
          });
          $('.filters .groups .tags input[type="checkbox"]').on("change", function() {
            return console.log('todo: filter markers based on tags');
          });
          return google.maps.event.addListener(_map, 'idle', function() {
            if ($(container).data('cluster')) {
              return _loadMarkerCluster();
            } else {
              return _loadMarkers();
            }
          });
      }
    };
    _initMapObject = function(container, options) {
      options = $.extend({
        lat: _startCenter.lat,
        lng: _startCenter.lng,
        zoom: 6
      }, options);
      return _map = new google.maps.Map(container, {
        center: new google.maps.LatLng(options.lat, options.lng),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: options.zoom
      });
    };
    _moveToLocation = function(lat, lng, zoom) {
      var center;
      center = new google.maps.LatLng(lat, lng);
      _map.panTo(center);
      return _map.setZoom(11);
    };
    _loadMarkers = function() {
      var data;
      if (_zoomMax && _map.getZoom() < _zoomMax) {
        return false;
      }
      data = {
        bounds: _map.getBounds().toUrlValue()
      };
      return $.ajax({
        url: "/listings",
        method: "GET",
        data: data,
        success: function(data) {
          var j, len, listing, ref, results, tags;
          tags = [];
          $(".filters .groups .tags input[type='checkbox']:checked").each(function(index, value) {
            return tags.push($(value).val());
          });
          console.log('todo: filter markers based on tags');
          ref = data['listings'];
          results = [];
          for (j = 0, len = ref.length; j < len; j++) {
            listing = ref[j];
            results.push(_setMarker(listing));
          }
          return results;
        }
      });
    };
    _loadMarkerCluster = function() {
      var data;
      data = _getFilterData();
      return $.ajax({
        url: "/listings",
        method: "GET",
        data: data,
        success: function(data) {
          var markerCluster;
          _markers = [];
          $(data['listings']).each(function(index, listing) {
            return _markers.push(new google.maps.Marker({
              'position': new google.maps.LatLng(listing.loc[1], listing.loc[0])
            }));
          });
          return markerCluster = new MarkerClusterer(_map, _markers, {
            gridSize: 60
          });
        }
      });
    };
    _getFilterData = function() {
      return {
        bounds: _map.getBounds().toUrlValue(),
        tags: (function() {
          var tags;
          tags = [];
          return $(".filters .groups .tags input[type='checkbox']:checked");
        }).each(function(index, value) {
          return tags.push($(value).val());
        })()
      };
    };
    _setMarker = function(listing, options) {
      var contentString, infowindow, latLng, marker;
      options = $.extend({
        infowindow: true,
        draggable: false,
        animation: null
      }, options);
      latLng = new google.maps.LatLng(listing.loc[1], listing.loc[0]);
      if (!_markers[listing._id]) {
        marker = new google.maps.Marker({
          position: latLng,
          map: _map,
          title: listing.name,
          draggable: options.draggable,
          animation: options.animation
        });
        _markers[listing._id] = marker;
        if (options.infowindow) {
          contentString = '<div class="infowindow">' + '<h2>' + listing["name"] + '</h2>' + '<p class="rating">' + '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' + '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' + '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' + '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>' + '<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>' + '</p>' + '<p>' + listing["description_short"] + '</p>' + '<p>' + listing["address"] + '</p>' + '<p><a href="/listings/' + listing["_id"] + '">Go to page</a></p>' + '</div>';
          infowindow = new google.maps.InfoWindow({
            content: contentString
          });
          google.maps.event.addListener(marker, 'click', function() {
            return infowindow.open(_map, marker);
          });
          if (options.draggable) {
            return google.maps.event.addListener(marker, 'dragend', function() {
              $("input[name='loc[1]']").val(marker.getPosition().lat());
              return $("input[name='loc[0]']").val(marker.getPosition().lng());
            });
          }
        }
      }
    };
    _removeMarkers = function() {
      var i, j, len;
      for (j = 0, len = _markers.length; j < len; j++) {
        i = _markers[j];
        _markers[i].setMap(null);
      }
      return _markers = {};
    };
    return {
      init: _init
    };
  })();

}).call(this);

//# sourceMappingURL=map.js.map