<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Image;
use App\ImagesPost;
use App\Group;

class Post extends Model
{
  protected $fillable = [
      'post_text','user_id','group_id',
  ];

  protected $hidden = [
      'remember_token',
  ];

  public function user()
  {
    return $this->belongsTo('App\User' , 'user_id') ;
  }

  public function imagespost()
  {
    return $this->hasMany('App\ImagesPost');
  }

  public function group()
  {
    return $this->belongsTo('App\Group','group_id') ;
  }

}
