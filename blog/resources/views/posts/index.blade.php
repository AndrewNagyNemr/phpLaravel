@extends('layouts.base')

@section('content')
<h1>posts/index</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-2 mt-2">create post</a>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Created At</th>
        <th scope="col">Update At</th>
        <th scope="col">Created by</th>

        <th scope="col">View</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['description']}}</td>
            <td>{{$post['created_at']}}</td>
            <td>{{$post['updated_at']}}</td>
            <td>Andrew</td>


            <td><a href="{{ route('posts.show', ['post'=>$post['id']]) }}" class="btn btn-primary">View</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
