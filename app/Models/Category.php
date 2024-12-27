<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'image'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}