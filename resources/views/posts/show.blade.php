@extends('layout/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Specific Post</h1>
            
            <div class="well">
                <h3>{{$post->title}}</h3>
                <small>Written on {{$post->created_at}}</small>
                <hr/>
                <p>{{$post->body}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
