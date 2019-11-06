<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parts extends Model
{
   protected $table="parts";
   protected $fillable=['part_name','part_brand','part_price','image','part_description'];
}
