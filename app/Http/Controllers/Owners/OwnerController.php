<?php

namespace App\Http\Controllers\Owners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Units\UnitModel;
use App\Models\Owners\OwnerModel;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('owners.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $floorUnits = UnitModel::all();
        return view('owners.create', compact('floorUnits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Owner = new OwnerModel;
        
        $Owner->owner_name = $request->owner_name;
        $Owner->email = $request->email;
        $Owner->contact_no = $request->contact_no;
        $Owner->password = $request->password;
        $Owner->present_address = $request->present_address;
        $Owner->permanent_address = $request->permanent_address;
        $Owner->nid = $request->nid;
        $Owner->owner_unit_no = implode(',', $request->input('owner_unit_no'));
        $Owner->owner_image = $request->owner_image;

        $Owner->save();
        $request->session()->flash('alert-success', 'Owner Successfully added');
        return redirect('owners');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
