<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'content', 'author_full_name', 'url'];

    protected $hidden = [];

    public function pathsToFiles()
    {
        return $this->hasMany(Article::class);
    }
}
