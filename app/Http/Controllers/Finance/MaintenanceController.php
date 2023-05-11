<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance\MaintenanceCost;
use App\Events\MaintenanceCostNotification;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $MaintenanceCosts = MaintenanceCost::all();
        return view('finance.maintenance.index', compact('MaintenanceCosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finance.maintenance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $MaintenanceCost = new MaintenanceCost;

        $MaintenanceCost->date = $request->date;
        $MaintenanceCost->month = $request->month;
        $MaintenanceCost->year = $request->year;
        $MaintenanceCost->maintenance_title = $request->maintenance_title;
        $MaintenanceCost->amount = $request->amount;
        $MaintenanceCost->details = $request->details;
        
        $MaintenanceCost->save();
        event(new MaintenanceCostNotification($request->amount));
        $request->session()->flash('alert-success', 'Maintenance Cost Successfully Added');
        return redirect('maintenance');

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
        $MaintenanceCost = MaintenanceCost::find($id);
        return view('finance.maintenance.edit', compact('MaintenanceCost'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $MaintenanceCost = MaintenanceCost::find($id);

        $MaintenanceCost->date = $request->date;
        $MaintenanceCost->month = $request->month;
        $MaintenanceCost->year = $request->year;
        $MaintenanceCost->maintenance_title = $request->maintenance_title;
        $MaintenanceCost->amount = $request->amount;
        // $MaintenanceCost->details = $request->details;
        
        $MaintenanceCost->save();
        $request->session()->flash('alert-success', 'Maintenance Cost Successfully Updated');
        return redirect('maintenance');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $MaintenanceCost = MaintenanceCost::find($id);
        $MaintenanceCost->delete();
        $request->session()->flash('alert-danger', 'Maintenance Cost Successfully Deleted');
        return redirect('maintenance');


    }
}