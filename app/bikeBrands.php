<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bikeBrands extends Model
{
   protected $table="bike_brand";
   protected $fillable=['brand_name','brand_image'];
}
