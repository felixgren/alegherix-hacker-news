<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $posts = Post::all();
        return view("welcome", ["posts" => $posts]);
    }

    public function mostLiked()
    {

        // $posts = Post::all()->orderBy("");
    }
}
