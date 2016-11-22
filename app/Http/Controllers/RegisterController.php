<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function editar ($id){
      $user = User::find($id);
      return view('auth.registeredit', compact('user'));
    }


    public function actualizar (Request $request)
    {
        $user = User::find($request->id);
        echo $user;
        echo "<br>";
        echo $user->image->src;
        echo "<br>";
        if ($request->file) {
          // Borrar avatar
          //dd($request->file);
          //dd(\Auth::user()->image->src);
          \Storage::delete($user->image->src);
          //borrar las filas imagen
          $user->image->delete();

          $file = request()->file('file');
          $extension = strtolower($file->extension());
          $fileName = uniqid().'.'.$extension;
          $file->storeAs('images/users-'.$user->id, $fileName);

          // Guardar avatar nuevo
          $image= Image::create([
            'src' =>  'images/users-'.$user->id.'/'.$fileName,
            'user_id' => $user->id
          ]);
          $user->image($request->input('file'),$request->user_id);
      }
      //  $user = \Auth::user()->update($request->all());
      $user = \Auth::user()->update([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => bcrypt($request['password']),
          'fecha_de_nacimiento'=>$request['fecha_de_nacimiento'],
          'genero'=>$request['genero'],
      ]);
      //$user->update($request->all());
      return redirect('home');
    }

}
