<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Group;

class EstablecimientosController extends Controller
{
  public function view($id)
  {
      $user = User::find($id);
      $posts = Post::where('group_id', '3')->orderBy('created_at', 'desc')->get();
      return view('groupviews.establecimientos', compact('user','posts'));
  }
}
