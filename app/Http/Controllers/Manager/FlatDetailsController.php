<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
// use App\Http\Requests\StoreFlatDetailsRequest;
// use App\Http\Requests\UpdateFlatDetailsRequest;
use App\Models\Manager\FlatDetails;
use Illuminate\Http\Request;

class FlatDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FlatDetails::all();
        //dd($data);
        return view('manager.flatdetails.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manager.flatdetails.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        FlatDetails::create($data);
        return redirect('/flat')->with('massage', 'Data added successfully');
    }

 /**
     * Display the specified resource.
     */
    public function show(FlatDetails $flatDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

        $flatDetails=FlatDetails::find($id);
        return view('manager.flatdetails.edit',compact('flatDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //dd($id);
        $flatDetails=FlatDetails::find($id);
        $flatDetails->user_id = $request->user_id;
        $flatDetails->flat_owner_id = $request->flat_owner_id;
        $flatDetails->flat_resident_id = $request->flat_resident_id;
        $flatDetails->flat_name = $request->flat_name;
        $flatDetails->flat_floor_no = $request->flat_floor_no;
        $flatDetails->flat_rent = $request->flat_rent;
        $flatDetails->flat_size = $request->flat_size;
        $flatDetails->flat_details = $request->flat_details;
        $flatDetails->additional_info = $request->additional_info;
        $flatDetails->save();
        return redirect('/flat')->with('massage', 'Data Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

        $flatDetails=FlatDetails::find($id);
        $flatDetails->delete();
        return redirect('/flat')->with('massage', 'Data Update successfully');
    }
}
