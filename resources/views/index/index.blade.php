@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			
			<div class="panel panel-default">
				<div class="panel-heading">Search</div>

				<div class="panel-body">
					
					{!! Form::open(['action' => 'OffersController@index', 'method' => 'POST']) !!}
				        @include ('index.partials.search_form')
				    {!! Form::close() !!}
					
				</div>
			</div>
			
			
			
			<ul class="list-group">
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">
						Glasgow <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> London
					</h4>
					<p class="list-group-item-text">via: Newcastle, Birmingham</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Bournemough <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> London</h4>
					<p class="list-group-item-text">via: Southhampton</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Land's end <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> John O'Groat</h4>
					<p class="list-group-item-text">via: Bristol, Warrington, Carlisle, Stirling, Inverness</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Glasgow <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Edinburgh</h4>
					<p class="list-group-item-text">&nbsp;</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Glasgow <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> London</h4>
					<p class="list-group-item-text">via: Newcastle, Birmingham</p>
				</a>
			</div>
			
		</div>
		
		<div class="col-md-7">
			
			&nbsp;
			
		</div>
	</div>
</div>
@endsection
