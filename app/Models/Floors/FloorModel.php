<?php

namespace App\Models\Floors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloorModel extends Model
{
    use HasFactory;
    protected $fillable = ['floor_name'];

    public function units()
    {
        return $this->hasMany(\App\Models\Units\UnitModel::class, 'floor_id', 'id');
    }
}
