<?php

namespace App\Models\Notice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerNotice extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'meeting_date',
        'status',
        'description',
        // Add other fields as needed
    ];
}
