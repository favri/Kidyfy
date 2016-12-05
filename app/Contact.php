<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = [
      'name_contact','subject_contact','contact_text',
  ];
}
