<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class parts extends Model
{
   protected $table="parts";
   protected $fillable=['part_name','part_category','part_brand','part_price','image','part_description'];
}
