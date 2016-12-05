<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Group;

class ColoniasController extends Controller
{
  public function view($id)
  {
      $user = User::find($id);
      $posts = Post::where('group_id', '6')->orderBy('created_at', 'desc')->get();
      return view('groupviews.colonias', compact('user','posts'));
  }
}
