@extends('app')

@section('content')
	@include ('partials.errors')
    
    {!! Form::open(['action' => 'OffersController@store', 'method' => 'POST']) !!}
        @include ('offers.partials.form', ['btnText' => 'Offer lift'])
    {!! Form::close() !!}
@stop