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
      $user = User::find($id);
      // $recipient = User::find($id);
      $posts = Post::where("user_id", "=", $user->id)->get();
      return view('userviews.userprofile', compact('user', 'posts'));
  }

}
