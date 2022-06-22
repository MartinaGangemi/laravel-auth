@extends('layouts.admin')

@section('content')



<img src="{{$post->img}}" alt="">
<h1>{{$post->title}}</h1>
<p>{{$post->content}}</p>
@endsection