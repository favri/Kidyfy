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


    public function actualizar (Request $request)
    {

        $user = User::find($request->id);

        if ($request->file) {
          // Borrar avatar
          \Storage::delete($user->image->src);
          //borrar las filas imagen
          $user->image->delete();

          $file = request()->file('file');
          $extension = strtolower($file->extension());
          $fileName = uniqid().'.'.$extension;
          $file->storeAs('images/users-'.$user->id, $fileName);

          // $image= Image::create([
          //     'src' =>  'images/users-'.$user->id.'/'.$fileName,
          //     'user_id' => $user->id
          // ]);
        }

        $user = \Auth::user()->update(
        [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'fecha_de_nacimiento'=>$request['fecha_de_nacimiento'],
            'genero'=>$request['genero'],
        ]
      );
        // Guardar avatar nuevo
        $user->image($request->input('file'),$request->user_id);
        return redirect('auth.registeredit');
    }

}
