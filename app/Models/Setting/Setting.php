<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','skype','fax',
        'opening_day','opening_time','address','facebook','twitter',
        'linked_in','youtube','copy_right','key_note','status'];
}
