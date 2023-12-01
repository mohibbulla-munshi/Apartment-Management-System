<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSetup extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'contact_no', 'password', 'photo'];
}
