<?php

  namespace App;

  use Illuminate\Notifications\Notifiable;
  use Illuminate\Foundation\Auth\User as Authenticatable;
  use App\Post;
  use App\Group;

  class Doctor extends Authenticatable
  {
      use Notifiable;

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

      // public function user() {
      //   return $this->hasMany('\App\User','user_id');
      // }

      public function image() {
        return $this->hasOne('\App\Image');
      }

      public function post() {
        return $this->hasMany('Post' , 'user_id');
      }

      // public function friendships() {
      //   return $this->hasMany('Friendship' , 'user_id');
      // }




  }
