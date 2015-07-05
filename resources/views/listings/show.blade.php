@extends('app')

@section('content')

<div style="position: relative;">
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/listings')}}">Listings</a></li>
        <li class="active">{{$listing['name']}}</li>
    </ol>

    <div class="controls" style="position: absolute; right: 10px; top: 10px;">
        <a href="{{url('/listings/' . $listing['_id'] . '/edit')}}">Edit</a> | <a href="{{url('/listings/' . $listing['_id'] . '/delete')}}">Delete</a>
    </div>
</div>

<div class="row">
    <div class="col-xs-7">

        <div class="panel panel-default">
            <div class="panel-heading sr-only">
                Description
            </div>
            <div class="panel-body">
                @if(!isset($listing['description']) or empty($listing['description']))
                    <a href="{{url('/listings/' . $listing['_id'] . '/edit')}}">Write a description</a>
                @else
                    {{ $listing['description'] }}
                @endif
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                Information
            </div>
            <div class="panel-body">
                <div class="contact-details">
                    <span class="glyphicon glyphicon-map-marker"></span>
                    {{ $listing['address'] }}
                </div>

                <div class="phone">
                    @if(!isset($listing['phone']) or empty($listing['phone']))
                        <a href="{{url('/listings/' . $listing['_id'] . '/edit')}}">Add a phone number</a>
                    @else
                        <span class="glyphicon glyphicon-phone-alt"></span>
                        {{ $listing['phone'] }}
                    @endif
                </div>

                <div class="website">
                    @if(!isset($listing['website']) or empty($listing['website']))
                        <a href="{{url('/listings/' . $listing['_id'] . '/edit')}}">Add a website</a>
                    @else
                        <span class="glyphicon glyphicon glyphicon-link"></span>
                        {{ $listing['website'] }}
                    @endif
                </div>

                <div class="opening-hours">
                    @if(!isset($listing['opening_hours']) or empty($listing['opening_hours']))
                        <a href="{{url('/listings/' . $listing['_id'] . '/edit')}}">Add opening hours</a>
                    @else
                        <span class="glyphicon glyphicon glyphicon-time"></span>
                        {{ $listing['opening_hours'] }}
                    @endif
                </div>
            </div>
        </div>
        
    </div>

    <div class="col-xs-5">
        <div id="map" data-type="single" data-id="{{$listing['_id']}}" data-listing="{{json_encode($listing)}}" style="width: 100%; height: 300px;"></div>
    </div>
</div>

<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&callback=map.init" type="text/javascript"></script>

@stop
