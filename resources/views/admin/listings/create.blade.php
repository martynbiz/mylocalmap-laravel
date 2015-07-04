@extends('app')

@section('content')

<ol class="breadcrumb">
	<li><a href="http://localhost:8000">Home</a></li>
	<li class="active">Add listing</li>
</ol>

{!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
	@include('listings.partials.form', ['btnText' => 'Submit listing'])
{!! Form::close() !!}

@stop
