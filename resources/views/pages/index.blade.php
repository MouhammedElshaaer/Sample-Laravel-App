
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the home page</p>
        <p>This is a project taught by treversy media youtube channel</p>

        @guest
	        <p>
	            <a href="/login" class="btn btn-primary" role="button">Login</a>
	            <a href="/register" class="btn btn-success" role="button">Register</a>
	        </p>
		@endguest

    </div>
@endsection