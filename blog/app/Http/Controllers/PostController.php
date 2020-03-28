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
        // dd($request->user_id);


        Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'user_id'=> $request->user_id

        ]);
        return redirect()->route('posts.index');
    }

    public function edit(){
        $users = User::all();
        $request=request();
        $post = Post::find(request()->post);
        return view('posts/edit',[
            'users'=>$users,
            'post'=>$post
        ]);
        // dd($post->title,$post->description, $post->user_id);
    }
    public function udate(){
        $request= request();
        dd($request->id, $request->title, $request->description);
        return redirect()->route('posts.index');
    }

    public function destroy(){
    }
}
