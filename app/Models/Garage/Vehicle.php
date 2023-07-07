<?php

namespace App\Models\Garage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
     protected $fillable = ['driver_id', 'number_plate', 'engine_no','thises_no','model','coler','status'];
     
     public function get_driver()
        {
            return $this->belongsTo(Driver::class);
        } 
     
     
}

