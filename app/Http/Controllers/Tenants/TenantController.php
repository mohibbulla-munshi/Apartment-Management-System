<?php

namespace App\Http\Controllers\Tenants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenants\Tenant;
use Illuminate\Support\Facades\Hash;

class TenantController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::all();
        return view('tenants.index', compact('tenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenants.create');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tenants',
            'password' => 'required|string|min:8',
            'contact' => 'required|string',
            'address' => 'required|string',
            'nid' => 'required|string',
            'floor_no' => 'required',
            'available_unit_no' => 'required',
            'advance_rent' => 'required|numeric',
            'rent_per_month' => 'required|numeric',
            'issue_date' => 'required|date',
            'rent_month' => 'required|string',
            'rent_year' => 'required|string',
            'status' => 'required|string',
            'tenant_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


            // Handle file upload if a tenant photo is provided

            $photoPath = $request->file('tenant_photo')->store('tenant_photos', 'public');
            

            // Hash the password before storing it
            $password = Hash::make($validatedData['password']);

            // Store the tenant in the database
            Tenant::create([
                'name'                  => $request->name,
                'email'                 => $request->email,
                'password'              => $password,
                'contact'               => $request->contact,
                'address'               => $request->address,
                'nid'                   => $request->nid,
                'floor_no'              => $request->floor_no,
                'available_unit_no'     => $request->available_unit_no,
                'advance_rent'          => $request->advance_rent,
                'rent_per_month'        => $request->rent_per_month,
                'issue_date'            => $request->issue_date,
                'rent_month'            => $request->rent_month,
                'rent_year'             => $request->rent_year,
                'status'                => $request->status,
                'tenant_photo'          => $photoPath,
                
            ]);

            // Redirect to a success page or do something else
            $request->session()->flash('alert-success', 'Tenant Successfully added');
            return redirect('tenants');
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
