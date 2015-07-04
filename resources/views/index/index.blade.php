@extends('homepage')

@section('content')

<div class="panel panel-default bigmap-menu">
    <div class="panel-body filters">

        <div class="form-group">
            <select name="city" class="form-control">
                @foreach($regions as $region)
                <optgroup label="{{ $region['name'] }}">
                    @foreach($region['cities'] as $city)
                    <option value="{{ $city['_id'] }}" data-lat="{{ $city['lat'] }}" data-lng="{{ $city['lng'] }}"> {{ $city['name'] }}
                    @endforeach
                </optgroup>
                @endforeach
            </select>
        </div>

        <div class="panel-group form-group groups" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach($groups as $group)
                <fieldset class="panel panel-default">
                    <div class="panel-heading">
                        <input type="checkbox" class="js-show" checked>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $group['_id'] }}" aria-expanded="true" aria-controls="collapse_{{ $group['_id'] }}">
                            <label for="group_{{ $group['_id'] }}">
                                {{ $group['name'] }}
                            </label>
                        </a>
                    </div>
                    <div id="collapse_{{ $group['_id'] }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_{{ $group['_id'] }}">
                        <div class="panel-body tags">
                            @foreach($group['tags'] as $tag)
                            <label for="tag_{{ $tag['_id'] }}" class="col-md-6">
                                <input type="checkbox" name="{{ $tag['_id'] }}" value="{{ $tag['_id'] }}" checked> {{$tag['name']}}
                            </label>
                            @endforeach
                        </div>
                    </div>
                </fieldset>
            @endforeach
        </div>

    </div>
</div>
</div><!-- can't figure why this <div> is needed, maps doesn't load otherwise -->

<div id="container">
    <div id="map"></div>
</div>

<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places" type="text/javascript"></script>

<script type="text/javascript">

var map;

var markers = [];

function initialize() {

    // initiate the map
    map = new google.maps.Map( document.getElementById("map"), {
        center: new google.maps.LatLng(54.4, (-3.4 - 3)),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 6
    } );

    // set region/city select to move to location when
    // changed
    $('.filters select[name="city"]').on("change", function() {
        var lat = $(this).find(':selected').data('lat'),
            lng = $(this).find(':selected').data('lng');
        moveToLocation(lat, lng);
    });

    // set *_changed events so that markers are re-loaded when
    // the map changes
    google.maps.event.addListener(map,'idle',function() {
        loadMarkers();
    });
};

function loadMarkers() {

    // only get points if zoomed enough in
    if (map.getZoom() < 10)
        return false;

    // set data to send to api
    var data = {
        bounds: map.getBounds().toUrlValue(),
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

            // remove all markers
            removeMarkers();

            $(data['listings']).each(function(index, listing) {
              var latLng = new google.maps.LatLng(listing.loc[1], listing.loc[0]);

              // Creating a marker and putting it on the map
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                title: listing.name
              });

              // push new marker to marker array
              markers.push(marker);

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
                        '<p><a href="{{ url('listings') }}/'+listing["_id"]+'">Go to page</a></p>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });

           });
        }
    });
}

function moveToLocation(lat, lng, zoom) {
    var center = new google.maps.LatLng(lat, lng);

    // using global variable:
    map.panTo(center);
    map.setZoom(11);
}

function removeMarkers(){
    for(i=0; i<markers.length; i++){
        markers[i].setMap(null);
    }

    // set to empty array
    markers = [];
}









</script>

@endsection
