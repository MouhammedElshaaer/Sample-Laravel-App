@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{form::label('title','Title')}}
            {{form::text('title',$post->title,['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{form::label('body','Body')}}
            {{form::textarea('body',$post->body,['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{form::hidden('_method','PUT')}}
        {{form::submit('Update',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection