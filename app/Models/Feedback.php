<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model {
  use HasFactory;

  protected $fillable = [
    "message",
    "rating",
    "quiz_id",
    "user_id", // remove both id's when finish website
  ];

  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }

  public function quiz(): BelongsTo {
    return $this->belongsTo(Quiz::class);
  }
}
