<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function editar ($id){
      $user = User::find($id);
      return view('auth.registeredit', compact('user'));
    }
}
