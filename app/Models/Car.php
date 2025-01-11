<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'image',
        'brand_name',
        'price_per_day',
        'stock'
    ];

    protected $casts = [
        'price_per_day' => 'int',
        'stock' => 'int'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}


