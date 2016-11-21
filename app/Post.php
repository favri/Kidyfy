<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
  protected $fillable = [
      'post_text','user_id','visitor'
  ];

  protected $hidden = [
      'remember_token',
  ];

  public function user()
  {
    return $this->hasOne('\App\User');
  }
}
