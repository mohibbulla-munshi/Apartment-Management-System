<?php

namespace App\Models\Tenants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = [
    'name', 'email', 'password', 'contact', 'address', 'nid', 'floor_no',
    'available_unit_no', 'advance_rent', 'rent_per_month', 'issue_date',
    'rent_month', 'rent_year', 'status', 'tenant_photo',
];
}
