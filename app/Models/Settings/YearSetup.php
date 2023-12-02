<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearSetup extends Model
{
    use HasFactory;
    protected $fillable = ['year_name'];
}
