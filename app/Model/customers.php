<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
   protected $table="customers";
   protected $fillable=['email','password'];
}
