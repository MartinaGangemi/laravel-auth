@extends('layouts.admin')

@section('content')
<div class="container">
    <div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <form action="{{route('admin.posts.update', $post->id)}}" method="post">
        @csrf 
        @method ('PUT')
       

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title"  class="@error('title') is-invalid @enderror form-control"   value ="{{$post->title}}" >
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content"  class="form-control"  rows="4">
        {{$post->content}}
        </textarea>
        
    </div>
    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" name="img" id="img"  class="@error('img') is-invalid @enderror form-control"  value ="{{$post->img}}" >
        @error('img')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    
    <button type="submit" class="btn btn-danger text-light mt-4">Edit Post</button>
    
    </form>
    
</div>
@endsection
