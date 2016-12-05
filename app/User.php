<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Hootlex\Friendships\Traits\Friendable;
use App\Post;
use App\Group;

class User extends Authenticatable
{
    use Notifiable;
    //use Friendable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'password','fecha_de_nacimiento','genero'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function image() {
      return $this->hasOne('\App\Image');
    }

    public function post() {
      return $this->hasMany('Post' , 'user_id');
    }



}
