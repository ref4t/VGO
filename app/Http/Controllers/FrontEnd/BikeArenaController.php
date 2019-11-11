<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\bikes;
use App\bikeBrands;
use App\Model\parts_category;
use App\Model\parts;
use App\Model\customers;

class BikeArenaController extends Controller
{
    public function login(Request $request)
    {
        // $customers = customers::create($request->all());
        $email=$request->email;
        $password=$request->password;

        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            return redirect()->intended('bike-Arena');
        }
    }
    public function index()
    {

        $brands = bikeBrands::select('brand_name')->get();
        $parts_category = parts_category::select('category_name')->get();
        return view('bikeArena.index')->with(compact('brands','parts_category',$brands,$parts_category));
    }
    public function viewBrand($name)
    {
        $bikes=bikes::where('brand',$name)->get();
        return view('bikeArena.brand-details')->with('bikes',$bikes);
    }
    public function allBrand()
    {
        $brands=bikeBrands::all();
        return view('bikeArena.brands')->with('brands',$brands);
    }
    public function viewParts($name)
    {
        $parts=parts::where('part_category',$name)->get();
        return view('bikeArena.part-details')->with('parts',$parts);
    }
    public function allParts()
    {
        $parts_category=parts_category::all();
        return view('bikeArena.parts')->with('parts_category',$parts_category);
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
    public function brandDetails()
    {
        return view('bikeArena.brand-details');
    }
    public function partDetails()
    {
        return view('bikeArena.part-details');
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
