<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotemodel extends Model
{
  protected $table="get_quote_form";
  protected $fillable = [
    'name', 'email', 'mobilenumber','skype_id','website_url','looking_for','more_details','interested_in'
];
}
