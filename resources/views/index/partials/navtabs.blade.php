<div style="position: relative;">
	<a href="h{{ url('/listings/create') }}" class="btn btn-primary" style="position: absolute; right: 10px;">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Add listing
	</a>
	
	<ul class="nav nav-tabs">
		<li role="presentation" @if($active == 'list') class="active" @endif><a href="{{ url('/') }}">My Local</a></li>
		<li role="presentation" @if($active == 'map') class="active" @endif><a href="{{ url('map') }}">Map</a></li>
	</ul>
</div>