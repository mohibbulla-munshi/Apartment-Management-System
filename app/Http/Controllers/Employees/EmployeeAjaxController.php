<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Models\Employees\Employee;
use Illuminate\Http\Request;

class EmployeeAjaxController extends Controller
{
    public function getEmployeeDetails($employeeName)
    {
        $employee = Employee::where('name', $employeeName)->first();

        if ($employee) {
            return response()->json([
                'success' => true,
                'data' => [
                    'designation' => $employee->designation,
                    'salary' => $employee->salary,
                ],
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Employee not found.',
            ], 404);
        }
    }
}
