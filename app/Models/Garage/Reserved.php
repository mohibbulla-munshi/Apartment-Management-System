<?php

namespace App\Models\Garage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
    use HasFactory;
    protected $fillable = ['parking_id', 'spot_id', 'driver','vehicle','reserved_on','reserved_until','status'];
}
