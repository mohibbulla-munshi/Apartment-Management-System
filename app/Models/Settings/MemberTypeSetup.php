<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberTypeSetup extends Model
{
    use HasFactory;
    protected $fillable = ['member_type'];
}
