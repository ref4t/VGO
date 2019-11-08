<?php

namespace App\Http\Controllers\FrontEnd;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\bikeBrands;

class BikeArenaController extends Controller
{
    public function index()
    {   $brands=bikeBrands::select('brand_name')->get();
        return view('bikeArena.index')->with('brands',$brands);
    }
    public function viewBrand($name)
    {   
        $brands=bikeBrands::where('brand_name',$name)->get();
        //return view('bikeArena.brands')->with('brands',$brands);
    }
    public function allBrand()
    {   
        $brands=bikeBrands::all();
        return view('bikeArena.brands')->with('brands',$brands);
    }
    public function about()
    {
        return view('bikeArena.about-us');
    }
    public function blog()
    {
        return view('bikeArena.blog');
    }
    public function blogdetails()
    {
        return view('bikeArena.blog-details');
    }
    public function cart()
    {
        return view('bikeArena.cart');
    }
    public function checkout()
    {
        return view('bikeArena.checkout');
    }
    public function contact()
    {
        return view('bikeArena.contact');
    }
    public function loginregister()
    {
        return view('bikeArena.login-register');
    }
    public function productdetails()
    {
        return view('bikeArena.product-details');
    }
    public function shop()
    {
        return view('bikeArena.shop');
    }
    public function wishlist()
    {
        return view('bikeArena.wishlist');
    }
}
