<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bikes;
class HomeController extends Controller
{
     public function index()
    {   
       
        
        
            $mostpopular= bikes::where('status','mostpopular')->get();
            return view('bikearena.index')->with('mostpopular',$mostpopular);
        
        
    }
}
