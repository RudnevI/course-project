<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapCoordinate extends Model
{
    use HasFactory;

    protected $fillable = [
        'longitude', 'latitude', 'description'
    ];
}
