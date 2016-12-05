<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserSecondarie;

class Group extends Model
{

  public function post() {
    return $this->hasMany('Post' , 'user_id');
  }

  public function UserSecondarie()
  {
    return $this->HasOne('App\UserSecondarie') ;
  }
}
