@extends('app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/offers/' . $offer->id) }}">{{$offer->title}}</a></li>
        <li class="active">Edit</li>
    </ol>
    
    {!! Form::model($offer, ['action' => ['OffersController@update', $offer->id], 'method' => 'PATCH']) !!}
        @include ('offers.partials.form', ['btnText' => 'Update offer'])
    {!! Form::close() !!}
    
    @include ('partials.errors')
@stop