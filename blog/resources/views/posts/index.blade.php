@extends('layouts.base')

@section('content')
<h1>posts/index</h1>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">View</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['description']}}</td>
            <td><a href="{{ route('routeName', ['id'=>1]) }}" class="btn btn-primary">View</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
