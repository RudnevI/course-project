<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PathToFile extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'path'];

    protected $hidden = [];
}
