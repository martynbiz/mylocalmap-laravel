<div class="form-group">
	{!! Form::label('start_id', 'From', ['class' => 'col-md-3 control-label']) !!}
	<div class="col-md-9">
		{!! Form::select('start_id', $cityOptions, null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('end_id', 'To', ['class' => 'col-md-3 control-label']) !!}
	<div class="col-md-9">
		{!! Form::select('end_id', $cityOptions, null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="col-md-12 form-group">
    {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
</div>