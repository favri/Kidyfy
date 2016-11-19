<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $fillable = [
      'src','user_id'
  ];
  
  public function user() {
    return $this->belogsTo('\App\User');
  }
}
