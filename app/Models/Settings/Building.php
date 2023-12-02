<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'contact_no',
        'security_guard_mobile',
        'secretary_mobile',
        'moderator_mobile',
        'construction_year',
        'address',
        'building_image',
        'status',
        'company_name',
        'company_phone',
        'company_address',
        'apartment_rules',
    ];
}
