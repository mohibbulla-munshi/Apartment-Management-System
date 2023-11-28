<?php

namespace App\Models\Committees;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'present_address',
        'permanent_address',
        'nid',
        'designation',
        'joining_date',
        'ending_date',
        'status',
        'committee_photo',
    ];

    protected $hidden = [
        'password',
    ];
}
