@extends('layouts.app')

@section('content')

<div class="card" style="width: 100%;">
    <div class="card-body">
        <div class="row">
            <div class="col-md-2 ">
                <a href="/posts" class="btn btn-light" style="padding:0"><i class="fas fa-arrow-left" style="font-size:20px"></i></a>
            </div>
            <div class="col-md-2 offset-md-8">
                {!! Form::open(['action' => ['PostsController@destroy', $post->id],
                                'method'=>'POST',
                                'onsubmit' => 'return confirmDelete()',
                                'class' => 'float-right'
                                ])
                                !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn  btn-light'])}}
                {!! Form::close() !!}
                <a href="/posts/{{$post->id}}/edit" class="btn btn-light float-right">Edit</a>
            </div>
         </div>
        <h1 class="card-title">
            <b>{{$post->title}}</b>
        </h1>
        <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%">
        <hr>
        <p>{!!$post->body!!}</p>
        <small>{{$post->created_at}} by {{$post->user->name}}</small>
    </div>
</div>

@endsection


<script>
    function confirmDelete() {
        var result = confirm('Are you sure you want to delete?');

        if (result) {
            return true;
        } else {
            return false;
        }
    }   
</script>﻿