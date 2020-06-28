@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Archive</h1>

        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Tit</th>
                <th>Creat</th>
                <th>Upd</th>
                <th colspan="3"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}<td/>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->created_at}}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', $post->id) }}">Show</a>
                </td>
                <td>
                    <a href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                </td>
                <td>
                    <a href="{{ route('admin.posts.show', $post->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>
        
    </div>
    {{ $posts->links() }}
@endsection