<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BikeArenaController extends Controller
{
    public function index()
    {
        return view('bikeArena.index');
    }
    public function contact()
    {
        return view('bikeArena.contact');
    }
    public function blog()
    {
        return view('bikeArena.blog');
    }
    public function about()
    {
        return view('bikeArena.about-us');
    }
}
