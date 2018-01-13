@extends('layouts.app')

@section('content')
   <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <a href="{{ url('/posts/'.$post->id) }}">{{$post->title}}</a>
                <br>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
    @endif
@endsection