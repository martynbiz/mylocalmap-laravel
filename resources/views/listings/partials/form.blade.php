<div class="row">
	<div class="col-md-12 offer-heading">
		
		<div class="well">
			<div class="col-md-6 left-col">
				<ol class="breadcrumb">
					<li><a href="{{ url('/home') }}">Home</a></li>
					<li class="active">Create a new lift</li>
				</ol>
			</div>
			
			<div class="col-md-6 right-col hidden-xs">
				{!! Form::submit('Next', ['class'=>'btn btn-primary']) !!}
			</div>
		</div>
		
	</div>
</div>

<div class="row offer-setup">
	<div class="col-md-10 col-md-offset-1 offer-setup">
		
		<div class="well">
			<div class="col-md-6">
				
			</div>
			
			<div class="col-md-6">
				
				
				
			</div>
		</div>
		
	</div>
</div>

<hr>

<div class="row offer-builder">
	
	<div class="col-md-3">
		<div class="city-box start">
			<div class="form-group">
				{!! Form::label('start_id', 'From:', ['class' => 'col-md-3 control-label']) !!}
				<div class="col-md-9">
					{!! Form::select('start_id', $cityOptions, null, ['name'=>'start_id[]', 'class' => 'form-control']) !!}
					{!! Form::select('start_hour', $hourOptions, null, ['name'=>'start_hour[]']) !!} :
					{!! Form::select('start_minute', $minuteOptions, null, ['name'=>'start_minute[]']) !!}
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-1">
		<div class="city-box-div">
			<button type="submit" value="submit_add_city" formaction="?index=1">
				<span class="glyphicon" aria-hidden="true"></span>
				<span class="sr-only">Add city</span>
			</button>
		</div>
	</div>
	<div class="col-md-3">
		<div class="city-box">
			<div class="form-group">
				{!! Form::label('start_id', 'Via:', ['class' => 'col-md-3 control-label']) !!}
				<div class="col-md-9">
					{!! Form::select('start_id', $cityOptions, null, ['name'=>'start_id[]', 'class' => 'form-control']) !!}
					{!! Form::select('start_hour', $hourOptions, null, ['name'=>'start_hour[]']) !!} :
					{!! Form::select('start_minute', $minuteOptions, null, ['name'=>'start_minute[]']) !!}
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-1">
		<div class="city-box-div">
			<button type="submit" value="submit_add_city" formaction="?index=1">
				<span class="glyphicon" aria-hidden="true"></span>
				<span class="sr-only">Add city</span>
			</button>
		</div>
	</div>
	<div class="col-md-3">
		<div class="city-box">
			<div class="form-group">
				{!! Form::label('start_id', 'To:', ['class' => 'col-md-3 control-label']) !!}
				<div class="col-md-9">
					{!! Form::select('start_id', $cityOptions, null, ['name'=>'start_id[]', 'class' => 'form-control']) !!}
					{!! Form::select('start_hour', $hourOptions, null, ['name'=>'start_hour[]']) !!} :
					{!! Form::select('start_minute', $minuteOptions, null, ['name'=>'start_minute[]']) !!}
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-1">
		<div class="city-box-div">
			<button type="submit" value="submit_add_city" formaction="?index=1">
				<span class="glyphicon" aria-hidden="true"></span>
				<span class="sr-only">Add city</span>
			</button>
		</div>
	</div>
	<div class="col-md-3">
		<div class="city-box end">
			<div class="form-group">
				{!! Form::label('start_id', 'To:', ['class' => 'col-md-3 control-label']) !!}
				<div class="col-md-9">
					{!! Form::select('start_id', $cityOptions, null, ['name'=>'start_id[]', 'class' => 'form-control']) !!}
					{!! Form::select('start_hour', $hourOptions, null, ['name'=>'start_hour[]']) !!} :
					{!! Form::select('start_minute', $minuteOptions, null, ['name'=>'start_minute[]']) !!}
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-12 offer-builder-footer">
		
		<div class="well">
			<div class="col-md-12 right-col">
				{!! Form::submit('Next', ['class'=>'btn btn-primary']) !!}
			</div>
		</div>
		
	</div>
</div>