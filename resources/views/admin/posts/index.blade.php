
@extends('layouts.admin')

@section('content')
<div class="container">

    <div>
        <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Create Post</a>
    </div>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Img</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td><img width="150" src="{{$post->img}}" alt="{{$post->title}}"></td>
                <td><a class="btn btn-primary" href="{{route('admin.posts.show', $post->id)}}">View</a>  - 
                <a class="btn btn-secondary" href="{{route('admin.posts.edit', $post->id)}}">Edit</a> -
                
                 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-post-{{$post->id}}">
                  Elimina
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="delete-post-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$post->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Elimina {{$post->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler cancellare {{$post->title}}?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger" type="submit"> Elimina</button>

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                </td>

            </tr>
            @empty
            <tr>
                <td scope="row"> Nessun Post da mostrare!</td>
            </tr>
            @endforelse

        </tbody>
    </table>


</div>
@endsection
