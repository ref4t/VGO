<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bikes extends Model
{
      protected $fillable = [
        'name','brand','status','price', 'etype', 'edisplacement', 'emaxpower', 'emaxtorque','noofgears','sfront','srear','bfront', 'brear','tfront','trear','fuelcap','esystem','headlamp','dlength','dgroundclear','dheight','dwidth','dwheelbase','dkerbweight','topspeed','milagecompany','milageusers','coolingsystem','startingmethod','abs'
    ];
protected $table='bikes';
}
