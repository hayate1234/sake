<?php

namespace App\Http\Controllers;

use App\Post;
use App\Spot;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
    public function show(Post $post)
    {
    return view('posts/show')->with(['post' => $post]);
    }
    
    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }
    
    public function store(Request $request, Post $post, Spot $spot)
    {
        $input = $request['post'];
        $input +=['user_id' => $request->user()->id];
        $post->fill($input)->save();
        $input = $request['spot'];
        $input +=['post_id' => $post->id];
        $spot->fill($input)->save();
        return redirect('/');
    }
    
    public function edit(Post $post, Category $category, Spot $spot)
    {
        return view('posts/edit')->with(['post' => $post, 'categories' => $category->get(), 'spot' => $spot]);
    }
    
    public function update(Request $request, Post $post, Spot $spot)
    {
        $input = $request['post'];
        $input +=['user_id' => $request->user()->id];
        $post->fill($input)->save();
        $input = $request['spot'];
        $input +=['post_id' => $post->id];
        $spot->fill($input)->save();
        return redirect('/');
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/user');
    }
}
