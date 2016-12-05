<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
// use Hootlex\Friendships\Traits\Friendable;
use App\Post;
use App\Group;
use App\User;
use App\Doctor;

class UserSecondarie extends Model
{
  use Notifiable;
  // use Friendable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'hijos','grupos_preferidos','obrasocial','doctor_id','user_id'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'remember_token',
  ];

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function post() {
    return $this->hasMany('Post' , 'user_id');
  }

}
