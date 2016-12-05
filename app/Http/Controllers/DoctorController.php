<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
//use Hootlex\Friendships\Traits\Friendable;
use App\Post;
use App\User;
use App\Group;
use App\Doctor;
use App\UserSecondarie;

class DoctorController extends Controller
{
  public function view($id)
  {
      $user = User::find($id);
      $doctors = DB::table('doctors')->get();
      return view('doctorviews.doctorlist', compact('user','doctors'));
  }
}
