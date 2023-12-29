<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function makes()
    // {
    //     return $this->hasMany(Make::class, 'make_id', 'id');
    // }

    public function cars()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

}