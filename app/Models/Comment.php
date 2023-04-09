<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    // Inverse
    public function user_id(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function forum_id(): BelongsTo
    {
        return $this->belongsTo(Forum::class);
    }
}
