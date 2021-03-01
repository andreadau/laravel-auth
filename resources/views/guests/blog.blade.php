@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td scope="row">{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
        </tr>
        @endforeach
    </tbody>

@endsection