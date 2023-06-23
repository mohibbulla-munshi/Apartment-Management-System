<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = ['floor_no', 'unit_no', 'rent_month','rent_year',
    'renter_name','rent','water_bill','electric_bill', 'gas_bill', 'security_bill','utility_bill',
     'other_bill','total_rent','issue_date',
    'bill_paid_date','bill_status'];
}
