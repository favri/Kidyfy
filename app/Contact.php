<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = [
      'name_contact','email','subject_contact','contact_text',
  ];

  protected $hidden = [
      'remember_token',
  ];
}
