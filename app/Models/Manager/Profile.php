<?php

namespace App\Models\Manager;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table ='profiles';

    protected $fillable = [

        'user_id',
        'name',
        'email',
        'mobile_number',
        'additional_mobile_number',
        'dob',
        'designation',
        'nid',
        'passport',
        'nationality',
        'gender',
        'permanent_address',
        'status',
        'image_path',
        'additional_info',
        
    ];

}
