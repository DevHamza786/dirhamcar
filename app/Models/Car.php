<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = "cars";

    public function carType()
    {
        return $this->hasMany(CarType::class, 'id', 'car_type_id');
    }
}
