<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'my_blogs';
    protected $fillable = ['title', 'body'];
}
