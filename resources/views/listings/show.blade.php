@extends('app')

@section('content')

<div style="position: relative;">
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/listings')}}">Listings</a></li>
        <li class="active">{{$listing['name']}}</li>
    </ol>

    <div class="controls" style="position: absolute; right: 10px; top: 10px;">
        <a href="#">Edit</a> | <a href="#">Delete</a>
    </div>
</div>

<div class="row">
    <div class="col-xs-7">

        <div class="panel panel-default">
            <div class="panel-heading sr-only">
                Description
            </div>
            <div class="panel-body">
                @if(isset($listing['description']))
                    {{ $listing['description'] }}
                @else
                    <a href="#">Write a description</a>
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
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    @if(isset($listing['phone']))
                        {{ $listing['phone'] }}
                    @else
                        <a href="#">Add a phone number</a>
                    @endif
                </div>

                <div class="website">
                    <span class="glyphicon glyphicon glyphicon-link"></span>
                    @if(isset($listing['website']))
                        {{ $listing['website'] }}
                    @else
                        <a href="#">Add a website</a>
                    @endif
                </div>

                <div class="opening-hours">
                    <span class="glyphicon glyphicon glyphicon-time"></span>
                    @if(isset($listing['opening_hours']))
                        {{ $listing['opening_hours'] }}
                    @else
                        <a href="#">Add opening hours</a>
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
