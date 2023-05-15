<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Quiz extends Model {
  use HasFactory;

  // Inverse
  public function user(): BelongsTo {
    return $this->belongsTo(User::class, 'id', 'user_id');
  }

  public function feedback(): HasOne {
    return $this->hasOne(Feedback::class);
  }
}
