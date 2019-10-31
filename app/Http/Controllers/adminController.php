<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bikes;

class adminController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.dashboard');
    }

    public function viewbikes()
    {
        $bikes=bikes::all();
        // return view('admin.viewbikes')->with('bikeinfo',$bikes);
        return view('admin.viewbikes');
        // return response()->json(['bikeinfo'=>$bikes]);
    }

    public function viewbikesitems(Request $request)
    {
        $bikesTable= bikes::all();
        return response()->json($bikesTable);
    }

    public function addbike(){
    	return view('admin.addbike');
    }
    public function editbike(Request $request,$id){

        $bikes=bikes::find($id);
        return view('admin.editbike')->with('bikes',$bikes);
    }
}
