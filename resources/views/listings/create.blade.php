@extends('app')

@section('content')

<ol class="breadcrumb">
	<li><a href="http://localhost:8000">Home</a></li>
	<li class="active">Add listing</li>
</ol>

{!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
	<div class="well col-md-12">
		<div class="form-group">
			{!! Form::label('name', 'Name', ['class' => 'col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('name', null, [
					'class'=>'form-control',
					'placeholder' => 'Ex. Queens Park Farmers\'s Market',
				]) !!}
			</div>
		</div>
	</div>

	<div class="well col-md-12">
		<div class="form-group">
			@include('listings.partials.tag_checkboxes', [
				'colWidth' => 3
			])
		</div>
	</div>


	<div class="well col-md-12">
		<div class="form-group">
			{!! Form::label('address', 'Address', ['class' => 'col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('address', null, [
					'class'=>'form-control',
					'placeholder' => 'Ex. 123 Victoria Road, Queens Park',
				]) !!}
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2">City</label>
			<div class="col-md-10">
				@include('listings.partials.city_select')
			</div>
		</div>
	</div>

	{!! Form::submit('Submit listing', ['class'=>'btn btn-primary form-control']) !!}

{!! Form::close() !!}

@stop
