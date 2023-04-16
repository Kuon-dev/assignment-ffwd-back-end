<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    // Comment
    /**
     * Get the comments of forum.
     */
    // public function comment(): HasMany
    // {
    //     return $this->hasMany(Comment::class);
    // }

    public function reply(): HasMany
    {
        return $this->hasMany(Reply::class);
    }
}
