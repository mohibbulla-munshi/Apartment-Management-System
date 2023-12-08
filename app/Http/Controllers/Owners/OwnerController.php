<?php

namespace App\Http\Controllers\Owners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Units\UnitModel;
use App\Models\Owners\OwnerModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


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
            'owner_image' => 'required|image'
        ]);

        //Handle file upload if an owner image is provided
        $path = $request->file('owner_image')->store('owner_images', 'public');
        
        // Hash the password before storing it
        $HashPassword = Hash::make($request['password']);

        // Convert owner_unit_no array to a string
        $ownerUnitNo = implode(',', $request['owner_unit_no']);

        // Store the owner in the database
        OwnerModel::create([
            'owner_name'        => $request->owner_name,
            'email'             => $request->email,
            'contact_no'        => $request->contact_no,
            'password'          => $HashPassword,
            'present_address'   => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'nid'               => $request->nid,
            'owner_unit_no'     => $ownerUnitNo,
            'owner_image'       => $path,
        ]);

        // Redirect to a success page or do something else
        $request->session()->flash('alert-success', 'Owner Successfully added');
        return redirect('owners');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $owner = OwnerModel::findOrFail($id);
        return view('owners.show', compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $owner = OwnerModel::findOrFail($id);
        $floorUnits = UnitModel::all();
        return view('owners.edit', compact('owner', 'floorUnits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            // Validate the form data
        $validatedData = $request->validate([
            'owner_name'        => 'required|string',
            'email'             => 'required|email|unique:owner_models,email,' . $id,
            'contact_no'        => 'required|string',
            'password'          => 'nullable|string|min:8', // Allow password to be nullable for updating without changing it
            'present_address'   => 'required|string',
            'permanent_address' => 'required|string',
            'nid'               => 'required|numeric',
            'owner_unit_no'     => 'required|array',
            'owner_image'       => 'nullable|image', // Allow updating without changing the image
        ]);

        // Find the owner by ID
        $owner = OwnerModel::findOrFail($id);

        // Handle file upload if a new owner image is provided
        if ($request->hasFile('owner_image')) {
            // Delete the old image if it exists
            if ($owner->owner_image) {
                Storage::disk('public')->delete($owner->owner_image);
            }

            // Store the new image
            $path = $request->file('owner_image')->store('owner_images', 'public');
            $owner->owner_image = $path;
        }

        // Hash the password before storing it if a new password is provided
        if ($request->filled('password')) {
            $owner->password = Hash::make($request['password']);
        }

        // Convert owner_unit_no array to a string
        $ownerUnitNo = implode(',', $request['owner_unit_no']);

        // Update the owner in the database
        $owner->update([
            'owner_name'        => $request->owner_name,
            'email'             => $request->email,
            'contact_no'        => $request->contact_no,
            'present_address'   => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'nid'               => $request->nid,
            'owner_unit_no'     => $ownerUnitNo,
        ]);

        // Redirect to a success page or do something else
        $request->session()->flash('alert-success', 'Owner Successfully updated');
        return redirect('owners');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $owner = OwnerModel::findOrFail($id);

        // Delete the owner's image from storage
        if ($owner->owner_image) {
            Storage::disk('public')->delete($owner->owner_image);
        }

        // Delete the owner from the database
        $owner->delete();
        $request->session()->flash('alert-danger', 'Owner Successfully Deleted');
        return redirect()->back();
    }

}
