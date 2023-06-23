<?php

namespace App\Models\Garage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkingspot extends Model
{
    use HasFactory;
    protected $fillable = ['type','status'];
}
