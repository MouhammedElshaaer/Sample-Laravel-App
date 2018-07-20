@extends('layouts.app')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <a href="/posts" class="btn btn-light" style="padding:0"><i class="fas fa-arrow-left" style="font-size:20px"></i></a>
        <h1 class="card-title">
            <b>{{$post->title}}</b>
        </h1>
        <hr>
        <p>{!!$post->body!!}</p>
        <small>{{$post->created_at}}</small>
    </div>
</div>

@endsection