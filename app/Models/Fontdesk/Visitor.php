<?php

namespace App\Models\Fontdesk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = ['entry_date','name','phone','address','floor_no','unit_name','reference','note'];
}
