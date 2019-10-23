<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BikeArena extends Controller
{
    public function index()
    {

        return view('bikearena.index');

    }
}