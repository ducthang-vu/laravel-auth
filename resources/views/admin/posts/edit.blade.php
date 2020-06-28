@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit {{ $post->title }}</h1>
        
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">  
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
            </div>
            <div class="form-group">
                <label for="body">Poste</label>
                <textarea class="form-control" type="text" name="body" id="body">{{ old('body', $post->body) }}</textarea>
            </div>
            <input type="submit" value="Edit">
        </form>
    </div>
@endsection