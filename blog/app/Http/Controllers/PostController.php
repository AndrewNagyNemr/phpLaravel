<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view("posts/index", [
            'posts'=>$posts
        ]);
    }

    public function show(){
        $request = request();
        $post = Post::find($request->post);
        return view("posts/show",[
            'post'=>$post
        ] );
    }

    public function create(){
        $users = User::all();
        return view("posts/create",[
            'users'=>$users
        ]);
    }

    public function store(){
        $request= request();
        // $post = new Post;
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->save();
        
        Post::create([
            'title'=> $request->title,
            'description'=> $request->description
        ]);
        return redirect()->route('posts.index');
    }
}
