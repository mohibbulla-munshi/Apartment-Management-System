<?php

namespace App\Http\Controllers\Garage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Garage\Driver;

class DriverController extends Controller
{
     public function index()
    {
        $drivers = Driver::orderBy('id', 'DESC')->get();
        return view('garage.driver.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('garage.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $driver = new Driver;  
        
        $driver->name = $request->name;
        $driver->licence = $request->licence;
        $driver->phone = $request->phone;
        $driver->vehicle = $request->vehicle;

        $driver->save();
        $request->session()->flash('alert-success', 'Driver Successfully added');
        return redirect('garage/driver');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->driver_id;
        $driver = Driver::find($id);
        return view('garage.driver.get-single-driver', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $driver = Driver::find($id);
        return view('garage.driver.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id  =  $request->id;
        $driver = Driver::find($id);
      
        $driver->name = $request->name;
        $driver->licence = $request->licence;
        $driver->phone = $request->phone;
        $driver->vehicle = $request->vehicle;

        $driver->save();
        $request->session()->flash('alert-success', 'Driver Successfully updated');
        return redirect('garage/driver');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        $request->session()->flash('alert-danger', 'Driver Successfully Deleted');
        return redirect('garage/driver');
    }
}
