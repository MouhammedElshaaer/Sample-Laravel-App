@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Your Blog Posts</h1>

                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a></td>
                                <td>
                                    {!! Form::open([ 'action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'onsubmit' => 'return confirmDelete()' ]) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn  btn-light'])}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>


                    @else

                        <p>Sorry, you have no posts</p>

                    @endif
                </div>
            </div>
        </div>
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
