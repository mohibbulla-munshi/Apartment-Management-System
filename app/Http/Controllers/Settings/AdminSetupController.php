<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Settings\AdminSetup;
use Illuminate\Support\Facades\Hash;

class AdminSetupController extends Controller
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
        $admins = AdminSetup::all();
        return view('settings.admins.create', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:admin_setups,email',
            'contact_no' => 'required|string',
            'password' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            // Add validation rules for other fields as needed
        ]);
        
        
        // Hash the password
        $hashedPassword = Hash::make($request->input('password'));
    
        // Handle file upload (if using storage)
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('admin_photos', 'public');
        }
    
        // Create new admin with hashed password
        AdminSetup::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact_no' => $request->input('contact_no'),
            'password' => $hashedPassword,
            'photo'     => $path
            // Add other fields as needed
        ]);
    
        // Redirect or perform additional actions as needed
        $request->session()->flash('alert-success', 'Admin Successfully added');
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
