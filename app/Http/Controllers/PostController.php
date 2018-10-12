<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all() 
    {
    	$posts = \App\Post::all();

    	return view('posts', compact('posts'));
    }

    public function create() 
    {
    	return view('create');
    }

    public function store(Request $request) 
    {
    	$post = new \App\Post();
    	$post->title = $request->get('titulo');
    	$post->text = $request->get('texto');
    	$post->save();

    	return redirect('/posts');
    }
}
