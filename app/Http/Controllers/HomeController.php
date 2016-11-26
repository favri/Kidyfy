<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('home', compact('posts'));
    }

    public function view($id)
    {
        $user = User::find($id);
        $posts = Post::where("user_id", "=", $user->id)->get();
        return view('userviews.userprofile', compact('user', 'posts'));
    }



}
