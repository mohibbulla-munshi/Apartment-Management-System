<?php

namespace App\Models\Fontdesk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','user_type','visitor_id','note','check_in','check_out','status'];
}
