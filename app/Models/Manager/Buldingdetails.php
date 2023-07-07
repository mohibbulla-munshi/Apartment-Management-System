<?php

namespace App\Models\Manager;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Buldingdetails extends Model
{
    //use HasFactory;
    use  HasFactory, Notifiable;
    protected $table ='buldingdetails';
    protected $fillable = [
        'user_id',
        'building_name',
        'division',
        'district',
        'city_corporation',
        'upazilla',
        'post_code',
        'area',
        'building_no',
        'building_type',
        'buliding_floors',
        'buliding_units',
        'building_owners',
        'additional_info',
    ];
}
