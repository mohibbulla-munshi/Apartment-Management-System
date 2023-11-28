<?php

namespace App\Models\Owners;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerModel extends Model
{
    use HasFactory;
    protected $fillable = ['owner_name','email','contact_no','password','password','present_address','permanent_address', 'nid','owner_unit_no'];
}
