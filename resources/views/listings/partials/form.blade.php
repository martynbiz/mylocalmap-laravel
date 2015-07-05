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
		@foreach($groups as $group)
			<fieldset>
				@foreach($group['tags'] as $tag)
				<label class="col-md-3 col-xs-12">
					{!! Form::checkbox('tags[]', $tag['_id']) !!}
					{{ $tag['name'] }}
				</label>
				@endforeach
			</fieldset>
		@endforeach
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
		    <select name="city" class="form-control">
				@foreach($regions as $region)
				<optgroup label="{{ $region['name'] }}">
					@foreach($region['cities'] as $city)
					<option value="{{ $city['_id'] }}" data-lat="{{ $city['lat'] }}" data-lng="{{ $city['lng'] }}"> {{ $city['name'] }}
					@endforeach
				</optgroup>
				@endforeach
			</select>
		</div>
	</div>
</div>

{!! Form::submit($btnText, ['class'=>'btn btn-primary form-control']) !!}
