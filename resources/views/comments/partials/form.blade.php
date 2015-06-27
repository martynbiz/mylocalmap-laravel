<div class="row">
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('content', 'Content:', ['class'=>'sr-only']) !!}
            {!! Form::text('content', null, [
                'class'=>'form-control', 
                'placeholder'=>'Write your comment here'
            ]) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::submit($btnText, ['class'=>'btn btn-primary form-control']) !!}
        </div>
    </div>
</div>

{!! Form::hidden('proposal_id', $proposal->id) !!}