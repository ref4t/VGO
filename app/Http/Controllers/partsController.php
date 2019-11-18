<?php

namespace App\Http\Controllers;

use App\Model\parts;
use App\Model\parts_category;
use Illuminate\Http\Request;

class partsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewpart()
    {
        $parts=parts::all();
        return view('parts.view')->with('parts',$parts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addpart()
    {
        $parts_category=parts_category::all();
        return view('parts.add')->with('parts_category',$parts_category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeparts(Request $request)
    {
        $parts = new parts;
        $parts->part_name = $request->part_name;
        $parts->part_brand = $request->part_brand;
        $parts->part_price = $request->part_price;
        $parts->part_category = $request->part_category;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/parts',$filename);
            $parts->image=$filename;
        }
        else{
            return $request;
            $parts->$image='';
        }
        $parts->part_description = $request->part_description;
        $parts->save();

		return redirect()->route('parts.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\parts  $parts
     * @return \Illuminate\Http\Response
     */
    public function show(parts $parts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\parts  $parts
     * @return \Illuminate\Http\Response
     */
    public function editpart(Request $request, $id)
    {
        $parts=parts::find($id);
        return view('parts.edit')->with('parts',$parts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\parts  $parts
     * @return \Illuminate\Http\Response
     */
    public function updatepart(Request $request,$id)
    {
        $parts=parts::find($id);
        $parts->part_name = $request->part_name;
        $parts->part_brand = $request->part_brand;
        $parts->part_price = $request->part_price;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/parts',$filename);
            $parts->image=$filename;
        }
        // else{
        //     $parts->part_name=$parts->part_name;
        // }

        $parts->part_description = $request->part_description;
        $parts->save();
        return redirect()->route('parts.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\parts  $parts
     * @return \Illuminate\Http\Response
     */
    public function destroy(parts $parts)
    {
        //
    }

    public function addpartcategory()
    {
        return view('parts.addcategory');
    }

    public function storepartscategory(Request $request)
    {
        $parts_category = new parts_category;
        $parts_category->category_name = $request->category_name;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/parts_category',$filename);
            $parts_category->image=$filename;
        }
        else{
            return $request;
            $parts_category->$image='';
        }

        $parts_category->save();

		return redirect()->route('parts.viewcategory');
    }

    public function viewpartcategory()
    {
        $parts_category=parts_category::all();
        return view('parts.viewcategory')->with('parts_category',$parts_category);
    }

    public function editpartcategory(Request $request, $id)
    {
        $parts_category=parts_category::find($id);
        return view('parts.editcategory')->with('parts_category',$parts_category);
    }

    public function updatepartcategory(Request $request,$id)
    {
        $parts_category=parts_category::find($id);
        $parts_category->category_name = $request->category_name;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/parts_category',$filename);
            $parts_category->image=$filename;
        }

        $parts_category->save();
        return redirect()->route('parts.viewcategory');
    }
}
