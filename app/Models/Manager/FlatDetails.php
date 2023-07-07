<?php

namespace App\Models\Manager;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlatDetails extends Model
{
    use HasFactory;
    protected $table='flat_details';
    protected $fillable = [
        'user_id',
        'flat_owner_id',
        'flat_resident_id',
        'flat_name',
        'flat_floor_no',
        'flat_rent',
        'flat_size',
        'flat_details',
        'additional_info',
    ];
}
