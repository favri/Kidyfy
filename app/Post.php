<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Image;

class Post extends Model
{
  protected $fillable = [
      'post_text','user_id',
  ];

  protected $hidden = [
      'remember_token',
  ];

  public function user()
  {
    return $this->belongsTo('App\User' , 'user_id') ;
  }

}
