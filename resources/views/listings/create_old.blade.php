@extends('app')

@section('content')

	{!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
		@include ('listings.partials.form', ['btnText' => 'Add listing'])
	{!! Form::close() !!}
	

@stop
