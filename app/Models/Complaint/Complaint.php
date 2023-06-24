<?php

namespace App\Models\Complaint;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
         'category',
         'problem_detail',
         'date',
         'status',
     ];

}
