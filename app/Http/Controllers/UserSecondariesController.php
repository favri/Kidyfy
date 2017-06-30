<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\UserSecondarie;
// use App\ObraSocial;
use App\Doctor;
use App\Group;


class UserSecondariesController extends Controller
{
  public function editar($id)
  {
    $usersecondarie = UserSecondarie::where("user_id", "=", $id)->get()->first();
    $grupos = Group::all();
    $doctores = Doctor::all();
    return view('auth.registeredit2', compact('usersecondarie','grupos','doctores'));
  }

  public function actualizar (Request $request)
  {
      // $user = User::find($request->id);
    $usersecondarie = UserSecondarie::where("user_id", "=", $request->id)->get()->first();

    $usersecondarie->hijos = $request['hijos'];
    $usersecondarie->group_id = $request['group_id'];
    $usersecondarie->obrasocial = $request['obrasocial'];
    $usersecondarie->doctor_id = $request['doctor_id'];

    $usersecondarie->save();
    return redirect('home');
  }

  public function store(Request $request)
  {
    $usersecondarie = UserSecondarie::create([
        'hijos' => $request['hijos'],
        'user_id' => Auth::user()->id,
        'group_id' => $request['group_id'],
        'obrasocial' => $request['obrasocial'],
        'doctor_id' => $request['doctor_id'],
    ]);
    // return view('registeredit2', compact('usersecondarie'));
    return redirect('home');

    }

    //
    // public function show($id)
    // {
    //   $usersecondarie = UserSecondarie::find($id);
    //   return view('auth.registeredit2', compact('usersecondarie'));
    // }

    public function destroy($id)
    {
      $usersecondarie = UserSecondarie::find($id);
      $usersecondarie->delete();
      return redirect ('auth.registeredit');
      }

}
