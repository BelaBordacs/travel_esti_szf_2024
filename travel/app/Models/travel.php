<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    /** @use HasFactory<\Database\Factories\TravelFactory> */
    use HasFactory;
    protected $primaryKey = 'travel_id';
    protected $fillable = [
        'evaluation',
        'flight_id',
        'user_id',
    ];
}
