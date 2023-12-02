<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\UtilityBillSetup;
use Illuminate\Http\Request;

class UtilityBillSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $utilityBills = UtilityBillSetup::all();
        return view('settings.utility_bill_setup.create', compact('utilityBills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gas_bill_per_flat' => 'required|numeric',
            'security_bill_per_flat' => 'required|numeric',
        ]);

        UtilityBillSetup::create([
            'gas_bill_per_flat' => $request->gas_bill_per_flat,
            'security_bill_per_flat' => $request->security_bill_per_flat,
        ]);

        $request->session()->flash('alert-success', 'Utility Bill Type Successfully added');
        return redirect()->back();
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
