<?php

namespace App\Http\Controllers\Garage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Garage\Parkingspot;

class ParkingspotController extends Controller
{
    public function index()
    {
        $parkingspots = Parkingspot::orderBy('id', 'DESC')->get();
        return view('garage.parkingspot.index', compact('parkingspots'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('garage.parkingspot.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $parkingspot = new Parkingspot;  
        $parkingspot->type = $request->type;

        $parkingspot->save();
        $request->session()->flash('alert-success', 'Parking Spot Successfully added');
        return redirect('garage/parkingspot');
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
        $parkingspot = Parkingspot::find($id);
        return view('garage.parkingspot.edit', compact('parkingspot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id  =  $request->id;
        $parkingspot = Parkingspot::find($id);
      
        $parkingspot->type = $request->type;
        $parkingspot->status = $request->status;

        $parkingspot->save();
        $request->session()->flash('alert-success', 'Parking Spot Successfully updated');
        return redirect('garage/parkingspot');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $parkingspot = Parkingspot::find($id);
        $parkingspot->delete();
        $request->session()->flash('alert-danger', 'Parking Spot Successfully Deleted');
        return redirect('garage/parkingspot');
    }

}
