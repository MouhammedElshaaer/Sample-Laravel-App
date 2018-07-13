@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    @if(count($posts)>0)

        @foreach($posts as $post)
            
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="/posts/{{$post->id}}">
                            <b>{{$post->title}}</b>
                        </a>
                    </h3>
                    <small>{{$post->created_at}}</small>
                </div>
            </div>
            {{$posts->links()}}

        @endforeach

    @else

        <p>No posts found</p>

    @endif

@endsection