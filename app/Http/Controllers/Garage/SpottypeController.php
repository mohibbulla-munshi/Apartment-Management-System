<?php

namespace App\Http\Controllers\Garage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Garage\Spottype;
use App\Models\Garage\Parkingspot;

class SpottypeController extends Controller
{
    public function index()
    {
        $spottypes = Spottype::orderBy('id', 'DESC')->get();
        return view('garage.spottype.index', compact('spottypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        $parkingspots = Parkingspot::orderBy('id', 'ASC')->get();
        return view('garage.spottype.create', compact('parkingspots'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $spottype = new Spottype;  
        $spottype->type = $request->type;
        $spottype->parking_id = $request->parking_id;

        $spottype->save();
        $request->session()->flash('alert-success', 'Spot Type Successfully added');
        return redirect('garage/spottype');
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
        $parkingspots = Parkingspot::orderBy('id', 'ASC')->get();
        $spottype = Spottype::find($id);
        return view('garage.spottype.edit', compact('spottype','parkingspots'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id  =  $request->id;
        $spottype = Spottype::find($id);
      
        $spottype->type = $request->type;
        $spottype->parking_id = $request->parking_id;
        $spottype->status = $request->status;

        $spottype->save();
        $request->session()->flash('alert-success', 'Spot Type Successfully updated');
        return redirect('garage/spottype');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $spottype = Spottype::find($id);
        $spottype->delete();
        $request->session()->flash('alert-danger', 'Spot Type Successfully Deleted');
        return redirect('garage/spottype');
    }
}
