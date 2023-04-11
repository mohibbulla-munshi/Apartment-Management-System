<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = ['bill_type', 'bill_deposit_date', 'bill_month','bill_year','total_amount','deposit_bank_name',];
}
