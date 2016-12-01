<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Group;

class IndumentariaController extends Controller
{
  public function view($id)
  {
      $user = User::find($id);
      $posts = Post::where('group_id', '4')->orderBy('created_at', 'desc')->get();
      return view('groupviews.indumentaria', compact('user','posts'));
  }
}
