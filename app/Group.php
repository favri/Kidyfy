<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

  public function post() {
    return $this->hasMany('Post' , 'user_id');
  }
}
