<?php

namespace App\Models\Floors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloorModel extends Model
{
    use HasFactory;
    protected $fillable = ['floor_name'];
}
