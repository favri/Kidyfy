<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Group;

class MedicosController extends Controller
{
  public function index()
  {
    return view('groupviews.medicos');
    }

  public function view($id)
  {
      $user = User::find($id);
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('groupviews.medicos', compact('user','posts'));
  }
}
