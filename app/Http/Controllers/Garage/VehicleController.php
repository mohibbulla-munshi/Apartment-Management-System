<?php

namespace App\Http\Controllers\Garage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Garage\Vehicle;
use App\Models\Garage\Driver;

class VehicleController extends Controller
{
     public function index()
    {
        $vehicles = Vehicle::orderBy('id', 'DESC')->get();
        return view('garage.vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $drivers = Driver::all();
        return view('garage.vehicle.create', compact('drivers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle;  
        
        $vehicle->driver_id = $request->driver_id;
        $vehicle->number_plate = $request->number_plate;
        $vehicle->engine_no = $request->engine_no;
        $vehicle->thises_no = $request->thises_no;
        $vehicle->model = $request->model;
        $vehicle->coler = $request->coler;
        
        $vehicle->save();
        $request->session()->flash('alert-success', 'Vehicle Successfully added');
        return redirect('garage/vehicle');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->vehicle_id;
        $vehicle = Vehicle::find($id);
        return view('garage.vehicle.get-single-vehicle', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $driver = Driver::all();
        $vehicle = Vehicle::find($id);
        return view('garage.vehicle.edit', compact('driver','vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id  =  $request->id;
        $vehicle = Vehicle::find($id);
      
        $vehicle->driver_id = $request->driver_id;
        $vehicle->number_plate = $request->number_plate;
        $vehicle->engine_no = $request->engine_no;
        $vehicle->thises_no = $request->thises_no;
        $vehicle->model = $request->model;
        $vehicle->coler = $request->coler;
        

        $vehicle->save();
        $request->session()->flash('alert-success', 'Vehicle Successfully updated');
        return redirect('garage/vehicle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        $request->session()->flash('alert-danger', 'Vehicle Successfully Deleted');
        return redirect('garage/vehicle');
    }
}
