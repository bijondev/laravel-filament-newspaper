<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'slug', 'content', 'status', 'thumbnail',
        'meta_keywords', 'meta_description', 'stiky','top','features','view','created_by',
        'updated_by'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

        /**
     * Define the relationship for 'created_by' field.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Define the relationship for 'updated_by' field.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

        /**
     * Boot the model to hook into the saving process.
     */
    protected static function booted()
    {
        static::creating(function ($post) {
            $post->created_by = Auth::id();  // Set the creator to the current authenticated user
        });

        static::updating(function ($post) {
            $post->updated_by = Auth::id();  // Set the updater to the current authenticated user
        });
    }
}
