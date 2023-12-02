<?php

namespace App\Models\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthSetup extends Model
{
    use HasFactory;
    protected $fillable = ['month_name'];
}
