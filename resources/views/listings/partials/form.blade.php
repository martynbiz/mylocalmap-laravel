<ol class="breadcrumb">
	<li><a href="{{ url('/') }}">Home</a></li>
	<li class="active">Add listing</li>
</ol>

<div class="well col-md-12">
	<div class="form-group">
	    {!! Form::label('name', 'Name', ['class' => 'col-md-2']) !!}
	    <div class="col-md-10">
		    {!! Form::text('name', null, [
		    	'class'=>'form-control', 
		    	'placeholder' => 'Ex. Queens Park Farmers\'s Market',
		    	'required' => true,
		    ]) !!}
		</div>
	</div>

	<div class="form-group">
	    {!! Form::label('description_short', 'Short description', ['class' => 'col-md-2']) !!}
	    <div class="col-md-10">
		    {!! Form::text('description_short', null, [
		    	'class'=>'form-control', 
		    	'length' => 64, 
		    	'placeholder' => 'Ex. Wide range of local produce from farmers in the Glasgow area.',
		    	'required' => true,
		    ]) !!}
		</div>
	</div>

	<div class="form-group">
	    {!! Form::label('description_long', 'Long description (optional)', ['class' => 'col-md-2']) !!}
	    <div class="col-md-10">
		    {!! Form::textarea('description_short', null, [
		    	'class'=>'form-control',
	    		'rows' => 4,
		    ]) !!}
		</div>
	</div>
</div>


<div class="well col-md-12">
	<div class="form-group">
	    {!! Form::label('address', 'Address', ['class' => 'col-md-2']) !!}
	    <div class="col-md-10">
		    {!! Form::text('address', null, [
		    	'class'=>'form-control', 
		    	'placeholder' => 'Ex. 123 Victoria Road, Queens Park',
		    	'required' => true,
		    ]) !!}
		</div>
	</div>
	
	<div class="form-group">
	    {!! Form::label('city_id', 'City', ['class' => 'col-md-2']) !!}
	    <div class="col-md-10">
		    {!! Form::select('city_id', $cityOptions, null, ['name'=>'start_id[]', 'class' => 'form-control']) !!}
		</div>
	</div>
</div>

{!! Form::submit($btnText, ['class'=>'btn btn-primary form-control']) !!}