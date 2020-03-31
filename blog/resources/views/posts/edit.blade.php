@extends('layouts.app')
@section('content')
<form method="post" action="{{ route('posts.update', ['post'=>$post->id]) }}">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail1">Post title</label>
    <input name='title' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
        value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Post description</label>
    <input name='description' type="textarea" class="form-control" id="exampleInputPassword1"
        value="{{$post->description}}">
  </div>
  <label for="exampleInputPassword1">Post creator</label>

<select name="user_id" class="form-control">
      @foreach ($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
  </select>
  <button type="submit" class="btn btn-primary mt-3">Edit</button>
</form>
@endsection