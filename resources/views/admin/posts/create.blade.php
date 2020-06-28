@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>New Post</h1>
        
        <form action="{{ route('admin.posts.store') }}" method="POST">  
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="body">Poste</label>
                <textarea class="form-control" type="text" name="body" id="body">{{ old('body') }}</textarea>
            </div>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection