@extends('app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/offers') }}">Offers</a></li>
        <li class="active">Create</li>
    </ol>
    
    {!! Form::open(['action' => 'OffersController@store', 'method' => 'POST']) !!}
        @include ('offers.partials.form', ['btnText' => 'Submit offer'])
    {!! Form::close() !!}
    
    @include ('partials.errors')
@stop