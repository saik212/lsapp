@extends('layouts.app')

@section('content')
    <h3><a href="{{ url('/posts') }}"><< Go Back</a></h3>
    <h1>{{$post->title}}</h1>
    <p>{!!$post->Body!!}</p>
    <br>
    @if (!Auth::guest())
    @if ($post->user->id == auth()->user()->id)
    <a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-default">Edit</a>
    @endif
    @endif
    
@endsection