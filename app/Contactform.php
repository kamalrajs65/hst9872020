<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactform extends Model
{

    protected $table="contactform";
    protected $fillable = [
      'name', 'email', 'phoneno','message',
  ];
}
