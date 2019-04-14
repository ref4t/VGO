<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bikes;

class bikesController extends Controller
{
    public function storebike(Request $request){
   
    $bikes = bikes::create($request->all());
    
		return redirect()->route('admin.viewbikes');
    }

    public function update(Request $request,$id)
    {
       
    	$data=bikes::find($id);
    	
			$data->name=$request->name;
			$data->brand=$request->brand;
			$data->price=$request->price;
			$data->etype=$request->etype;
			$data->edisplacement=$request->edisplacement;
			$data->emaxpower=$request->emaxpower;
			$data->emaxtorque=$request->emaxtorque;
			$data->noofgears=$request->noofgears;
			$data->sfront=$request->sfront;
			$data->srear=$request->srear;
			$data->bfront=$request->bfront;
			$data->brear=$request->brear;
			$data->tfront=$request->tfront;
			$data->trear=$request->trear;
			$data->fuelcap=$request->fuelcap;
			$data->esystem=$request->esystem;
			$data->headlamp=$request->headlamp;
			$data->dlength=$request->dlength;
			$data->dgroundclear=$request->dgroundclear;
			$data->dheight=$request->dheight;
			$data->dwidth=$request->dwidth;
			$data->dwheelbase=$request->dwheelbase;
			$data->dkerbweight=$request->dkerbweight;
			$data->topspeed=$request->topspeed;
			$data->milagecompany=$request->milagecompany;
			$data->milageusers=$request->milageusers;
			$data->coolingsystem=$request->coolingsystem;
			$data->startingmethod=$request->startingmethod;
			$data->abs=$request->abs;

		$data->save();

    	return redirect()->route('admin.viewbikes');
    }
    
}
