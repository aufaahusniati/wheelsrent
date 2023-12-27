<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
