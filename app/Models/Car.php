<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function makes()
    {
        return $this->belongsTo(Make::class, 'make_id', 'id');
    }
}

