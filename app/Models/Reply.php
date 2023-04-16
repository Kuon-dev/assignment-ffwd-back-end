<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    // Inverse
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function comment(): BelongsTo
    // {
    //     return $this->belongsTo(Comment::class);
    // }

    public function forum(): BelongsTo
    {
        return $this->belongsTo(Forum::class);
    }

    public function comment(): HasMany {
        return $this->hasMany(Comment::class);
    }
}
