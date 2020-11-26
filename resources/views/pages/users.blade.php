@extends('layout/app')

@section('content')
<div>
    <h1>{{$title}}</h1>  
        @if ($users >0)  
        <ol>
        @foreach ($users as $user)
        <li>{{$user}}</li>
        @endforeach
    </ol>
        @endif
</div>
@endsection