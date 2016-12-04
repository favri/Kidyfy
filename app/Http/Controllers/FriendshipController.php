<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use App\User;
use Auth;



class FriendshipController extends Controller
{
  public function getIndex()
  {
    $not_friends = User::where('id', '!=', Auth::user()->id);
    if (Auth::user()->friends->count()) {
      $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
    }
    $not_friends = $not_friends->get();

    return View::make('userviews.amistades')->with('not_friends', $not_friends);
  }


}
