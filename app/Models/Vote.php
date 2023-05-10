<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model {
  use HasFactory;

  protected $fillable = [
    "user_id",
    "forum_id",
    "is_upvote"
  ];

  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }

  public function forum(): BelongsTo {
    return $this->belongsTo(Forum::class);
  }
}
