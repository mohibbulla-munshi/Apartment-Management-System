<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice\EmployeeNotice;
use Illuminate\Http\Request;

class EmployeeNoticeController extends Controller
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
        $employeeNotices = EmployeeNotice::all();
        return view('notices.employee.create', compact('employeeNotices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'meeting_date' => 'required|date',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
            // Add other validation rules as needed
        ]);

        EmployeeNotice::create($validatedData);

        $request->session()->flash('alert-success', 'Employee Notice Successfully added');
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
