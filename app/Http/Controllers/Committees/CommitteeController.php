<?php

namespace App\Http\Controllers\Committees;

use App\Http\Controllers\Controller;
use App\Models\Committees\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $committees = Committee::all();
        return view('committees.index', compact('committees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('committees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validate the form data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:committees',
                'password' => 'required|string|min:8',
                'phone' => 'required|string',
                'present_address' => 'required|string',
                'permanent_address' => 'nullable|string',
                'nid' => 'required|string',
                'designation' => 'required|string',
                'joining_date' => 'required|date',
                'ending_date' => 'nullable|date',
                'status' => 'required|string',
                'committee_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Handle file upload if a committee photo is provided
            $photoPath = null;

            if ($request->hasFile('committee_photo')) {
                $photoPath = $request->file('committee_photo')->store('committee_photos', 'public');
            }

            // Hash the password before storing it
            $validatedData['password'] = Hash::make($validatedData['password']);

            // Store the management committee in the database
            $managementCommittee = Committee::create($validatedData + ['committee_photo' => $photoPath]);

            // Redirect to a success page or do something else
            $request->session()->flash('alert-success', 'Management Committee Member Successfully added');
            return redirect('committees');
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
