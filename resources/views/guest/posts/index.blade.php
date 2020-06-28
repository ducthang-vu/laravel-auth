@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Archive</h1>
        @foreach ($posts as $post)
            <article>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
            </article>
        @endforeach
    </div>
    {{ $posts->links() }}
@endsection