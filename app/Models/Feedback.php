<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    public function user_id(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function quiz_id(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }
}
