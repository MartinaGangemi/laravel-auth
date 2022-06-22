@extends('layouts.admin')

@section('content')

<div class="container">
    <img src="{{$post->img}}" alt="">
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
</div>


@endsection