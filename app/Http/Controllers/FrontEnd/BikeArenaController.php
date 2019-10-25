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
