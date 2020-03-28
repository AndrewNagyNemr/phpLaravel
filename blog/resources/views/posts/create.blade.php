@extends('layouts.base')
@section('content')
<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Post title</label>
      <input name='title' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Post description</label>
      <input name='description' type="textarea" class="form-control" id="exampleInputPassword1">
    </div>
<select name="user_id" class="form-control">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary mt-3">Create</button>
  </form>
    
@endsection
