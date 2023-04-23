<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'photo',
        'city',
        'make',
        'model',
        'description',
        'year',
        'mileage',
        'transmission_type',
        'store_phone',
        'price',
    ];

    protected $casts = [
        'id' => 'string',
        'year' => 'integer',
        'mileage' => 'integer',
        'price' => 'float',
    ];
}


