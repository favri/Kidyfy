<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Image extends Model
{
  protected $fillable = [
      'src','user_id'
  ];

  public function user() {
    return $this->belongsTo('\App\User');
  }
}
