@extends('app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Offers</li>
    </ol>
    
    @if($offers->count())
        @foreach($offers as $offer)
            <div class="offers">
                <h2><a href="{{ route('offers.show', $offer->id) }}">{{$offer->title}}</a></h2>
            </div>
        @endforeach
    @else
        <p>There are currently no offers</p>
    @endif
    
    <a href="{{route('offers.create')}}" class="btn btn-default">Create</a>
@stop