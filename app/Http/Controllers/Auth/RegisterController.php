<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Image;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'fecha_de_nacimiento' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
      $user = User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'fecha_de_nacimiento'=>$data['fecha_de_nacimiento'],
          'genero'=>$data['genero'],
      ]);
      $image= Image::create([
          'scr' =>  uniqid(),
          'user_id' => $user->id
      ]);
      $extension = strtolower(\Input::file('file')->getClientOriginalExtension());
      $fileName = uniqid().'.'.$extension;
      $file = $image->scr;
      $ext = $file->extension();
      $name = uniqid();
      $file->storeAs('images/users-'.$user->id, $name.'.'.$ext);
      //persiste en base
      $image = new \App\Image(['src' => 'images/users-'.$user->id.'/'.$name.'.'.$ext]);
      $user->images()->save($image);
      $user->images($data['file'],$user->user_id);
      return $user;
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->images($request->input('file'),$request->user_id);
        dd($user->images($request->input('file'),$request->user_id));
        return redirect('home');
    }

}
