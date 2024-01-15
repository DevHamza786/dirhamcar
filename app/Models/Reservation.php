<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = "reservations";
    public function car_details()
    {
        return $this->hasMany(Car::class, 'id', 'car_id');
    }


    public function user_details()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
