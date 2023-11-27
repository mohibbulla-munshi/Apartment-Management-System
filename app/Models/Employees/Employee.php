<?php

namespace App\Models\Employees;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'contact',
        'present_address',
        'permanent_address',
        'nid',
        'designation',
        'joining_date',
        'ending_date',
        'salary',
        'status',
        'employee_photo',
    ];
}
