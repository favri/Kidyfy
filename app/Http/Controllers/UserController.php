<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;

class UserController extends Controller
{
  public function view($id)
  {
      $user = User::find(Auth::user()->id);
      $recipient = User::find($id);
      $posts = Post::where("user_id", "=", $recipient->id)->get();
      return view('userviews.userfriend', compact('user', 'posts','recipient'));
  }

}
