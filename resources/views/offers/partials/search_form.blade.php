<div class="form-group">
    {!! Form::label('start_id', 'From') !!}
    {!! Form::select('start_id', $cities, null) !!}
</div>

<div class="form-group">
    {!! Form::label('end_id', 'To') !!}
    {!! Form::select('end_id', $cities, null) !!}
</div>

<div class="form-group">
    {!! Form::submit($btnText, ['class'=>'btn btn-primary form-control']) !!}
</div>