<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Quiz extends Model {
  protected $fillable = [
    'title',
    'user_id',
    'score',
    'attempted_date',
    'completed_time',
];

  use HasFactory;

  // Inverse
  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }

  public function feedback(): HasOne {
    return $this->hasOne(Feedback::class);
  }
}
