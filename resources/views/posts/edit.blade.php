@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->Body, ['class' => 'form-control', 'id' => 'article-ckeditor'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'pull-right']) !!}
        {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection