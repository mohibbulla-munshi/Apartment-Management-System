<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityBillSetup extends Model
{
    use HasFactory;
    protected $fillable = [
        'gas_bill_per_flat',
        'security_bill_per_flat'
    ];
}
