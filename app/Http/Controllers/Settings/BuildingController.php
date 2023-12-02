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
            'building_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:enable,disable',
            'company_name' => 'nullable|string',
            'company_phone' => 'nullable|string',
            'company_address' => 'nullable|string',
            'apartment_rules' => 'nullable|string',
        ]);

        // Handle file upload if an image is provided
        if ($request->hasFile('building_image')) {
            $imagePath = $request->file('building_image')->store('building_images', 'public');
            $validatedData['building_image'] = $imagePath;
        }

        Building::create($validatedData);
        
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
