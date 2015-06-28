@extends('homepage')

@section('content')

<div class="bigmap-menu">
	
	<div class="panel panel-default filters">
		<div class="panel-body">
			
			<div class="form-group">
				{!! Form::label('start_id', 'Go to:', ['class' => 'control-label sr-only']) !!}
				{!! Form::select('start_id', $cityOptions, null, ['name'=>'start_id[]', 'class' => 'form-control']) !!}
			</div>
			
		</div>
	</div>
	
	<ul class="list-group">
		<a href="#" class="list-group-item">
			<h4 class="list-group-item-heading">
				Bennets of Dunblane
			</h4>
			<p class="list-group-item-text">Award winning butcher shop in the heart of Dunblane.</p>
		</a>
		<a href="#" class="list-group-item">
			<h4 class="list-group-item-heading">
				Greenfield Organic Supermarket
			</h4>
			<p class="list-group-item-text">Wide range of fresh and organic produce.</p>
		</a>
		<a href="#" class="list-group-item">
			<h4 class="list-group-item-heading">
				The London Brewery
			</h4>
			<p class="list-group-item-text"></p>
		</a>
		<a href="#" class="list-group-item">
			<h4 class="list-group-item-heading">
				Highland Clothing
			</h4>
		</a>
		<a href="#" class="list-group-item">
			<h4 class="list-group-item-heading">My local supermarket</h4>
			<p class="list-group-item-text">Local grocerie and bakery shop.</p>
		</a>
	</div>
	
</div>

<div id="container">
    <div id="map"></div>
</div>

<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places" type="text/javascript"></script>

<script type="text/javascript">

function initialize() {
	
	var json = [
	  {
	    "title": "Stockholm",
	    "lat": 59.3,
	    "lng": 18.1,
	    "description": "Stockholm is the capital and the largest city of Sweden and constitutes the most populated urban area in Scandinavia with a population of 2.1 million in the metropolitan area (2010)"
	  },
	  {
	    "title": "Oslo",
	    "lat": 59.9,
	    "lng": 10.8,
	    "description": "Oslo is a municipality, and the capital and most populous city of Norway with a metropolitan population of 1,442,318 (as of 2010)."
	  },
	  {
	    "title": "Copenhagen",
	    "lat": 55.7,
	    "lng": 12.6,
	    "description": "Copenhagen is the capital of Denmark and its most populous city, with a metropolitan population of 1,931,467 (as of 1 January 2012)."
	  }
	];
	
	var map = new google.maps.Map(document.getElementById("map"), {
		center: new google.maps.LatLng(57.9, 14.6),
		zoom: 6,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	
	for (var i = 0, length = json.length; i < length; i++) {
	  var data = json[i],
	      latLng = new google.maps.LatLng(data.lat, data.lng); 
	     
	  // Creating a marker and putting it on the map
	  var marker = new google.maps.Marker({
	    position: latLng,
	    map: map,
	    title: data.title
	  });
	}

	// var map = new google.maps.Map( document.getElementById("map"), {
	// 	center: new google.maps.LatLng(54.4, (-3.4 - 3)),
	// 	mapTypeId: google.maps.MapTypeId.ROADMAP,
	// 	zoom: 7
	// } );
};

</script>

@endsection
