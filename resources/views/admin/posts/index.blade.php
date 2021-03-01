@extends('layouts.dashboard')

@section('content')
<h1>All the Post</h1>
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
        @foreach($posts as $post)
        <tr>
            <td scope="row">{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->slug }}</td>
            <td>
                <a class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                <a class="btn btn-warning"><i class="fas fa-edit fa-xs fa-fw"></i></a>
                <a class="btn btn-danger"><i class="fas fa-trash fa-xs fa-fw"></i></a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection