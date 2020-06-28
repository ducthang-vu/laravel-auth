@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Detail of {{ $post->title }}</h1>

        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Create</th>
                <th>Update</th>
                <th colspan="2"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $post->id }}<td/>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->created_at}}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', $post->id) }}">Editw</a>
                </td>
                <td>
                    <a href="{{ route('admin.posts.show', $post->id) }}">Deleted</a>
                </td>
            </tr>
            </tbody>
        </table>
        
    </div>
@endsection