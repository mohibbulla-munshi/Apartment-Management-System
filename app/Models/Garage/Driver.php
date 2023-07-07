<?php

namespace App\Models\Garage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'licence', 'phone','vehicle','status'];
}
