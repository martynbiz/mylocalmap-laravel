@extends('app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('proposals') }}">Proposals</a></li>
        {{-- <li class="active">{{$proposal->title}}</li> --}}
    </ol>
    
    <h2>{{$proposal->title}}</h2>
            
    {!! Form::open(['action' => 'VotesController@store', 'method' => 'POST', 'class' => 'votesForm']) !!}
        @include ('votes.partials.form', ['btnText' => 'Submit proposal'])
        {{ plural(count($proposal->votes), 'vote', 'votes') }}
    {!! Form::close() !!}
    
    <div class="row">
        <div class="col-md-8">
            
             <div class="well">
                <p>{{$proposal->content}}</p>
                
                @foreach ($proposal->tags as $tag)
                    <span class="badge">{{$tag->name}}</span>
                @endforeach
                
                {!! Form::open(array('route' => array('proposals.destroy', $proposal->id), 'method' => 'delete', 'id' => 'proposalDelete')) !!}
                    @if (Auth::user() and Auth::user()->canUpdate($proposal))
                        [
                            @if (Auth::user() and Auth::user()->canUpdate($proposal))
                                <a href="{{route('proposals.edit', [$proposal->id])}}">Edit</a>
                            @endif
                            @if (Auth::user() and Auth::user()->canDelete($proposal))
                                <a href="#" onclick="$('#proposalDelete').confirmSubmit('Are you sure you want to delete this proposal?'); return false;">Delete</a>
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
                    <td>{{$proposal->user->name}}</td>
                </tr>
                <tr>
                    <th>Created:</th>
                    <td>{{$proposal->date_created}}</td>
                </tr>
                
                @if ($proposal->date_updated != $proposal->date_created)
                    <tr>
                        <th>Last updated:</th>
                        <td>{{$proposal->date_updated}}</td>
                    </tr>
                @endif
            </table>
            
        </div>
    </div>
    
    <h3>Comments</h3>
    
    {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST']) !!}
        @include ('comments.partials.form', ['btnText' => 'Add comment'])
    {!! Form::close() !!}
    
            
            @if ($proposal->comments->count() > 0)
                    
                    @foreach ($proposal->comments as $comment)
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