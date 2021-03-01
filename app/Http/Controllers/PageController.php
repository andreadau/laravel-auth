<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the application Homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guests.index');
    }

        /**
     * Show the application About.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('guests.about');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contacts()
    {
        return view('guests.contacts');
    }

    /**
     * Show post page
     *  @return view
     */
    public function blog(Post $post)
    {
        $posts = $post->all();
        return view('guests.blog', compact("posts"));
    }
}
