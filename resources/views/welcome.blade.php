@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Search</div>

				<div class="panel-body">
					
					{!! Form::open(['action' => 'OffersController@search', 'method' => 'POST']) !!}
				        @include ('offers.partials.search_form')
				    {!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
