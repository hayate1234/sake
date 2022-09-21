<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(User $user)
    {
        return view('User.index')->with(['own_posts' => $user->getOwnPaginateBylimit()]);
    }
    
    /*public function create(Category $category)
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
    }*/
}
