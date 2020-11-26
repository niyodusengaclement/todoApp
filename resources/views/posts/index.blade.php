@extends('layout/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Posts</h1>
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                <div class="well">
                    <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
                @endforeach
                {{$posts->links()}}
            @else
            <h2>No posts found </h2>
            @endif
        </div>
    </div>
</div>
@endsection
