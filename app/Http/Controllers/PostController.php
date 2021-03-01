<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        /**
     * Show post page
     *  @return view
     */
    public function index(Post $post)
    {
        $posts = Post::latest()->get();
        return view('guests.blog.index', compact("posts"));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('guests.blog.show', compact('post'));
    }

}
