@extends('layouts.app')

@section('content')
<h1>Post</h1>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
        </tr>
    </tbody>
</table>
@endsection