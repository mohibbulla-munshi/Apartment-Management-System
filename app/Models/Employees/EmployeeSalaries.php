<?php

namespace App\Models\Employees;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalaries extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'salary_month',
        'designation',
        'salary_per_month',
        'issue_date',
        'salary_year',
        // Add other fields as needed
    ];
}
