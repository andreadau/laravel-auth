@extends('layouts.dashboard')

@section('content')
<h1>Post</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->slug }}</td>
            <td>
                <a class="btn btn-warning"><i class="fas fa-edit fa-xs fa-fw"></i></a>
                <a class="btn btn-danger"><i class="fas fa-trash fa-xs fa-fw"></i></a>
            </td>

        </tr>
    </tbody>
</table>
@endsection