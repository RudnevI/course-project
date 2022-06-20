<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CulturalHeritageSite extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description'
    ];


    public function mapCoordinates()
    {
        return $this->hasMany(MapCoordinate::class, 'site_id');
    }
}
