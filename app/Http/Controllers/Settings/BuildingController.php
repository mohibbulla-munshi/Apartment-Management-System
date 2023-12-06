<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
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
        $buildings = Building::all();
        return view('settings.buildings.create', compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:buildings,email',
            'contact_no' => 'required|string',
            'security_guard_mobile' => 'nullable|string',
            'secretary_mobile' => 'nullable|string',
            'moderator_mobile' => 'nullable|string',
            'construction_year' => 'required|integer',
            'address' => 'required|string',
            'status' => 'required|in:enable,disable',
            'company_name' => 'nullable|string',
            'company_phone' => 'nullable|string',
            'company_address' => 'nullable|string',
            'apartment_rules' => 'nullable|string',
        ]);

        // Handle file upload if an image is provided
        $imagePath = $request->file('building_image')->store('building_images', 'public');
        
        Building::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact_no' => $request->contact_no,
            'security_guard_mobile' => $request->security_guard_mobile,
            'secretary_mobile' => $request->secretary_mobile,
            'moderator_mobile' => $request->moderator_mobile,
            'construction_year' => $request->construction_year,
            'address' => $request->address,
            'building_image' => $imagePath,
            'status' => $request->status,
            'company_name' => $request->company_name,
            'company_phone' => $request->company_phone,
            'company_address' => $request->company_address,
            'apartment_rules' => $request->apartment_rules,
        ]);
        
        $request->session()->flash('alert-success', 'Building Successfully added');
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
