<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Models\Employees\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees',
            'password' => 'required|string',
            'contact' => 'required|string',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'nid' => 'required|string',
            'designation' => 'required|string',
            'joining_date' => 'required|date',
            'ending_date' => 'nullable|date',
            'salary' => 'required|numeric',
            'status' => 'required|string',
            'employee_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload if an employee photo is provided
        if ($request->hasFile('employee_photo')) {
            $file = $request->file('employee_photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('employee_photos', $fileName, 'public');
        } else {
            $fileName = null;
        }

        // Create a new employee record
        $employee = Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'contact' => $request->input('contact'),
            'present_address' => $request->input('present_address'),
            'permanent_address' => $request->input('permanent_address'),
            'nid' => $request->input('nid'),
            'designation' => $request->input('designation'),
            'joining_date' => $request->input('joining_date'),
            'ending_date' => $request->input('ending_date'),
            'salary' => $request->input('salary'),
            'status' => $request->input('status'),
            'employee_photo' => $fileName,
        ]);

        // Redirect to the index or show page, or return a response as needed
        // For example:
        $request->session()->flash('alert-success', 'Employee Successfully added');
        return redirect('employees');
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
