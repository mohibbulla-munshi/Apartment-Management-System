<?php

namespace App\Http\Controllers\Garage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Garage\Reserved;
use App\Models\Garage\Parkingspot;
use App\Models\Garage\Spottype;

class ReservedController extends Controller
{
    public function index()
    {
        $reserveds = Reserved::orderBy('id', 'DESC')->get();
        return view('garage.reserved.index', compact('reserveds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        $parkingspots = Parkingspot::orderBy('id', 'ASC')->get();
        $spottypes = Spottype::orderBy('id', 'ASC')->get();
        return view('garage.reserved.create', compact('parkingspots','spottypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserved = new Reserved;  
        $reserved->parking_id = $request->parking_id;
        $reserved->spot_id = $request->spot_id;
        $reserved->driver = $request->driver;
        $reserved->vehicle = $request->vehicle;

        $date = str_replace('/', '-', $request->reserved_on);
        $reserved->reserved_on = date("Y-m-d", strtotime($date));
        $date = str_replace('/', '-', $request->reserved_until);
        $reserved->reserved_until = date("Y-m-d", strtotime($date));

        $reserved->save();
        $request->session()->flash('alert-success', 'Reserved Successfully added');
        return redirect('garage/reserved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->reserved_id;
        $reserved = Reserved::find($id);
        return view('garage.reserved.get-single-reserved', compact('reserved'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parkingspots = Parkingspot::orderBy('id', 'ASC')->get();
        $spottypes = Spottype::orderBy('id', 'ASC')->get();
        $reserved = Reserved::find($id);
        return view('garage.reserved.edit', compact('parkingspots','spottypes','reserved'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id  =  $request->id;
        $reserved = Reserved::find($id);
      
        $reserved->parking_id = $request->parking_id;
        $reserved->spot_id = $request->spot_id;
        $reserved->driver = $request->driver;
        $reserved->vehicle = $request->vehicle;

        $date = str_replace('/', '-', $request->reserved_on);
        $reserved->reserved_on = date("Y-m-d", strtotime($date));
        $date = str_replace('/', '-', $request->reserved_until);
        $reserved->reserved_until = date("Y-m-d", strtotime($date));

        $reserved->save();
        $request->session()->flash('alert-success', 'Reserved Successfully updated');
        return redirect('garage/reserved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $reserved = Reserved::find($id);
        $reserved->delete();
        $request->session()->flash('alert-danger', 'Reserved Successfully Deleted');
        return redirect('garage/reserved');
    }
}
