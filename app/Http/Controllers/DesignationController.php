<?php

namespace App\Http\Controllers;

use App\Models\Designation\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Designation::all();
        return view('designation.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('designation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Designation::create($data);
        return redirect('/designation')->with('massage', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $designation=Designation::find($id);
        return view('designation.edit',compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $designation=Designation::find($id);
        $designation->user_id = $request->user_id;
        $designation->role = $request->role;
        $designation->description = $request->description;

        $designation->save();
        return redirect('/designation')->with('massage', 'Data Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $designation=Designation::find($id);
        $designation->delete();
        return redirect('/designation')->with('massage', 'Data Update successfully');
    }
}
