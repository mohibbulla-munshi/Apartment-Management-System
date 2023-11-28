<?php

namespace App\Http\Controllers\Owners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Units\UnitModel;
use App\Models\Owners\OwnerModel;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = OwnerModel::all();
        return view('owners.index', compact('owners'));
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
        // Validate the form data
        $validatedData = $request->validate([
            'owner_name' => 'required|string',
            'email' => 'required|email|unique:owner_models',
            'contact_no' => 'required|string',
            'password' => 'required|string|min:8',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'nid' => 'required|numeric',
            'owner_unit_no' => 'required|array',
        ]);

        // Handle file upload if an owner image is provided
        //$imagePath = null;

        // if ($request->hasFile('owner_image')) {
        //     $imagePath = $request->file('owner_image')->store('owner_images', 'public');
        // }

        // Hash the password before storing it
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Convert owner_unit_no array to a string
        $ownerUnitNo = implode(',', $validatedData['owner_unit_no']);

        // Store the owner in the database
        OwnerModel::create(array_merge($validatedData, ['owner_unit_no' => $ownerUnitNo]));

        // Redirect to a success page or do something else
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
