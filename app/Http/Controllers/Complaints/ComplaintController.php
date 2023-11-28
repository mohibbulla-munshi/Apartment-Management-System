<?php

namespace App\Http\Controllers\Complaints;

use App\Http\Controllers\Controller;
use App\Models\Complaint\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $complaints = Complaint::all();
        return view('complaint.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('complaint.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required',
            'problem_detail' => 'required',
            'date' => 'required|date',
        ]);

        // Set default value for status
        $validatedData['status'] = 'active';

        // Associate the user_id with the authenticated user
        $validatedData['user_id'] = auth()->id();

        // Store the data in the database
        Complaint::create($validatedData);

        // Redirect to a success page or do something else
        $request->session()->flash('alert-success', 'Record Successfully Added');
        return redirect('complaint'); // Change 'your.index' to the actual route name
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
