@extends('default')

@section('content')
	<div class="container">
		
		@include('partials.flash')
		@include ('partials.errors')

		{!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
			@include ('listings.partials.form', ['btnText' => 'Add listing'])
		{!! Form::close() !!}
		
	</div>
@stop