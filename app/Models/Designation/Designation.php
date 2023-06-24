<?php

namespace App\Models\Designation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $fillable = [
       'user_id',
        'role',
        'description',
    ];
}
