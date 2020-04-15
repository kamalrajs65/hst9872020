<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogmodel extends Model
{
  protected $table="tbl_blog";
  protected $fillable = [
    'blog_title', 'blog_image','status',
];
}
