<?php

namespace App\Models\Garage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spottype extends Model
{
    use HasFactory;
    protected $fillable = ['type','parking_id','status'];
}


