<?php

namespace App\Http\Controllers\Employees\Salaries;

use App\Http\Controllers\Controller;
use App\Models\Employees\Employee;
use App\Models\Employees\EmployeeSalaries;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
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
        $employeeNames = Employee::pluck('name');
        $employeeSalaries = EmployeeSalaries::all();
        return view('employees.salaries.create', compact('employeeNames', 'employeeSalaries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Validate the request data
            $request->validate([
                'employee_name' => 'required|string',
                'salary_month' => 'required|string',
                'designation' => 'required|string',
                'salary_per_month' => 'required',
                'issue_date' => 'required|date',
                'salary_year' => 'required|integer',
                // Add other validation rules as needed
            ]);

            

            // Create a new EmployeeSalary instance and fill it with the request data
            $employeeSalary = new EmployeeSalaries([
                'employee_name' => $request->input('employee_name'),
                'salary_month' => $request->input('salary_month'),
                'designation' => $request->input('designation'),
                'salary_per_month' => $request->input('salary_per_month'),
                'issue_date' => $request->input('issue_date'),
                'salary_year' => $request->input('salary_year'),
                // Add other fields as needed
            ]);

            // Save the employee salary details to the database
            $employeeSalary->save();

            // Redirect to the desired page or return a response
            $request->session()->flash('alert-success', 'Employee Salary Successfully added');
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
