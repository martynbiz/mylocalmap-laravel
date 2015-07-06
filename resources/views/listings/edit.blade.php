@extends('app')

@section('content')

<div style="position: relative;">
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/listings')}}">Listings</a></li>
        <li><a href="{{url('/listings/' . $listing['_id'])}}">{{$listing['name']}}</a></li>
        <li class="active">Edit</a>
    </ol>
</div>

{!! Form::open(['action' => ['ListingsController@update', $listing['_id']], 'method' => 'PUT']) !!}
<div class="row">
    <div class="col-md-7">

        <div class="panel panel-default">
            <div class="panel-heading sr-only">
                Description
            </div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('name', 'Name', ['class' => 'col-md-2']) !!}
                    <div class="col-md-10">
                        {!! Form::text('name', $listing['name'], [
                            'class'=>'form-control',
                        ]) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Description', ['class' => 'col-md-2']) !!}
                    <div class="col-md-10">
                        {!! Form::textarea('description', $listing['description'], [
                            'class'=>'form-control',
                        ]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                Information
            </div>
            <div class="panel-body">
                <div class="contact-details">
                    <div class="form-group">
                        {!! Form::label('address', 'Address', ['class' => 'col-md-2']) !!}
                        <div class="col-md-10">
                            {!! Form::text('address', $listing['address'], [
                                'class'=>'form-control',
                            ]) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">City</label>
                    <div class="col-md-10">
                        @include('listings.partials.city_select')
                    </div>
                </div>

                <div class="phone">
                    <div class="form-group">
                        {!! Form::label('phone', 'Phone', ['class' => 'col-md-2']) !!}
                        <div class="col-md-10">
                            {!! Form::text('phone', $listing['phone'], [
                                'class'=>'form-control',
                            ]) !!}
                        </div>
                    </div>
                </div>

                <div class="website">
                    <div class="form-group">
                        {!! Form::label('website', 'Website', ['class' => 'col-md-2']) !!}
                        <div class="col-md-10">
                            {!! Form::text('website', $listing['website'], [
                                'class'=>'form-control',
                            ]) !!}
                        </div>
                    </div>
                </div>

                <div class="opening-hours">
                    <div class="form-group">
                        {!! Form::label('opening_hours', 'Opening hours', ['class' => 'col-md-2']) !!}
                        <div class="col-md-10">
                            {!! Form::textarea('opening_hours', $listing['opening_hours'], [
                                'class'=>'form-control',
                            ]) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div id="map" data-type="single" data-draggable="true" data-id="{{$listing['_id']}}" data-listing="{{json_encode($listing)}}" style="width: 100%; height: 300px;"></div>

        {!! Form::hidden('loc[0]', $listing['loc'][0], [
            'class'=>'form-control',
        ]) !!}

        {!! Form::hidden('loc[1]', $listing['loc'][1], [
            'class'=>'form-control',
        ]) !!}

        <p>Click and drag marker to reposition</p>

        <div class="panel panel-default">
            <div class="panel-heading">
                Tags
            </div>
            <div class="panel-body">
                <div class="form-group">
                    @include('listings.partials.tag_checkboxes')
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('reason', 'Reason for change', ['class' => 'col-md-2']) !!}
                    <div class="col-md-10">
                        {!! Form::text('reason', '', [
                            'class'=>'form-control',
                        ]) !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{!! Form::submit('Submit changes', ['class'=>'btn btn-primary form-control']) !!}
{!! Form::close() !!}

<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&callback=map.init" type="text/javascript"></script>

@stop
