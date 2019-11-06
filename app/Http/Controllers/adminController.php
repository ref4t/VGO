<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use Illuminate\Http\Request;
use App\bikes;
use App\User;
use App\bikeBrands;

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
        return view('admin.viewbikes')->with('bikeinfo',$bikes);
       // return view('admin.viewbikes');
        // return response()->json(['bikeinfo'=>$bikes]);
    }

    public function viewbikesitems()
    {
        return bikes::all();
    }

    public function addbike()
    {
        $brands=bikeBrands::all();
    	return view('admin.addbike')->with('brands',$brands);
    }

    public function editbike(Request $request,$id){

        $bikes=bikes::find($id);
        return view('admin.editbike')->with('bikes',$bikes);
    }
    // public function editbike(Request $request,$id){

    //     $bikes=bikes::find($id);
    //     return view('admin.editbike')->with('bikes',$bikes);
    // }
    public function getUsersForDataTable(Request $request)
    {
        $users = User::all();
        return UsersResource::collection($users);
    }
}
