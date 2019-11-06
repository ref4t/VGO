<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class bikes extends Model
{
      protected $fillable = [
        'name','brand','status','price', 'etype', 'edisplacement', 'emaxpower', 'emaxtorque','noofgears','carburettor','borestroke','compression','eoilcap','killswitch','chassistype','sfront','srear','bfront', 'brear','tfront','trear','fuelcap','esystem','headlamp','passlight','dlength','dgroundclear','dheight','dwidth','dwheelbase','dkerbweight','topspeed','milagecompany','milageusers','coolingsystem','startingmethod','abs'
    ];
protected $table='bikes';
}
