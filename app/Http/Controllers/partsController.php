<?php

namespace App\Http\Controllers;

use App\parts;
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
        return view('parts.add');
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
}
