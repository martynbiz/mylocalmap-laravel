@extends('app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('offers') }}">Offers</a></li>
        {{-- <li class="active">{{$offer->title}}</li> --}}
    </ol>
    
    <h2>{{$offer->title}}</h2>
            
    {!! Form::open(['action' => 'VotesController@store', 'method' => 'POST', 'class' => 'votesForm']) !!}
        @include ('votes.partials.form', ['btnText' => 'Submit offer'])
        {{ plural(count($offer->votes), 'vote', 'votes') }}
    {!! Form::close() !!}
    
    <div class="row">
        <div class="col-md-8">
            
             <div class="well">
                <p>{{$offer->content}}</p>
                
                @foreach ($offer->tags as $tag)
                    <span class="badge">{{$tag->name}}</span>
                @endforeach
                
                {!! Form::open(array('route' => array('offers.destroy', $offer->id), 'method' => 'delete', 'id' => 'offerDelete')) !!}
                    @if (Auth::user() and Auth::user()->canUpdate($offer))
                        [
                            @if (Auth::user() and Auth::user()->canUpdate($offer))
                                <a href="{{route('offers.edit', [$offer->id])}}">Edit</a>
                            @endif
                            @if (Auth::user() and Auth::user()->canDelete($offer))
                                <a href="#" onclick="$('#offerDelete').confirmSubmit('Are you sure you want to delete this offer?'); return false;">Delete</a>
                            @endif
                        ]
                    @endif
                {!! Form::close() !!}
            </div>
            
        </div>
        <div class="col-md-4">
            
            <table class="table table-striped">
                <tr>
                    <th>Author:</th>
                    <td>{{$offer->user->name}}</td>
                </tr>
                <tr>
                    <th>Created:</th>
                    <td>{{$offer->date_created}}</td>
                </tr>
                
                @if ($offer->date_updated != $offer->date_created)
                    <tr>
                        <th>Last updated:</th>
                        <td>{{$offer->date_updated}}</td>
                    </tr>
                @endif
            </table>
            
        </div>
    </div>
    
    <h3>Comments</h3>
    
    {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST']) !!}
        @include ('comments.partials.form', ['btnText' => 'Add comment'])
    {!! Form::close() !!}
    
            
            @if ($offer->comments->count() > 0)
                    
                    @foreach ($offer->comments as $comment)
                        <div class="row">
                            <div class="col-md-1">
                                <i class="glyphicon glyphicon-user circle" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11">
                                <blockquote class="comment">
                                    <p>&quot;{{$comment->content}}&quot;</p>
                                    <small>{{$comment->user->name}}</small>
                                </blockquote>
                            </div>
                        </div>
                    @endforeach
            @else
                <p>There are currently no comments</p>
            @endif
    
@stop