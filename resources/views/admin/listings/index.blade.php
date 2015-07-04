@extends('app')

@section('content')

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li>Listings</li>
</ol>

filters...

{!! Form::open(['action' => 'ListingsController@destroy', 'method' => 'POST']) !!}
    @include('handlebars.admin.listing.list')
{!! Form::close() !!}

@stop
