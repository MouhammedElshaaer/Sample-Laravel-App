@extends('layouts.app')

@section('content')

<div class="card" style="width: 50rem;">
    <div class="card-body">
        <h1><b>namespace</b></h1>
        <p>act as an identifier where there may be 2 classes with same name but in different namespaces</p>
    </div>
</div>

<div class="card" style="width: 50rem;">
    <div class="card-body">
        <h1><b>pagination</b></h1>
        <p><b>$posts=Post::orderBy('created_at','desc')->paginate(2);</b> here paginate(2) means that every page will have 2 posts.</p>
    </div>
</div>

<div class="card" style="width: 50rem;">
    <div class="card-body">
        <h1><b>{!! someVar !!}</b></h1>
        <p>used to parse html elements that's returned in the someVar variable </p>
    </div>
</div>


@endsection