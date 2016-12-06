<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class ImagesPost extends Model
{
  protected $fillable = [
      'src','post_id'
  ];

  public function post() {
    return $this->belongsTo('\App\Post');
  }
}
