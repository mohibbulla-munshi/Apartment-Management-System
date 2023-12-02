<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillTypeSetup extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_type'
    ];
}
