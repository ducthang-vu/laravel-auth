@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>New Post</h1>

        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="body">Text</label>
                <textarea class="form-control" type="text" name="body" id="body">{{ old('body') }}</textarea>
            </div>
            <div class="form-group">
                <label for="img">Load image:</label>
                <input id="path_img" name="path_img" type="file" id="img" accept="image/*">
            </div>

            <input type="submit" value="Create">
        </form>
    </div>
@endsection
