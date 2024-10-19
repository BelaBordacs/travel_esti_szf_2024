<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airline extends Model
{
    /** @use HasFactory<\Database\Factories\AirlineFactory> */
    use HasFactory;
    protected $primaryKey = 'airline_id';
    protected $fillable = [
        'name',
        'country',
    ];
}
