<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['title', 'slug', 'image'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}