<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'city',
        'image',
        'rating',
        'travel_type',
        'journey_date',
        'review',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'journey_date' => 'date',
            'rating' => 'integer',
        ];
    }
}