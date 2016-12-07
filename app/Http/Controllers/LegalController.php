<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
  public function legals()
  {
    return view('legal');
    }

}
