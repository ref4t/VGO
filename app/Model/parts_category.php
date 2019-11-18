<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class parts_category extends Model
{
   protected $table="parts_category";
   protected $fillable=['category_name','image'];
}
