<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Group;

class ColegiosController extends Controller
{
  public function view($id)
  {
      $user = User::find($id);
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('groupviews.colegio', compact('user','posts'));
  }
}
