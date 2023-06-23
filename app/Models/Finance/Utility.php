<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;
    protected $fillable = ['floor_no', 'unit_no', 'owner_name', 'utility_month', 'utility_year',
    'water_bill', 'electric_bill', 'gas_bill', 'security_bill', 'utility_bill', 'total_rent', 'issue_date', 'other_bill'];
}
