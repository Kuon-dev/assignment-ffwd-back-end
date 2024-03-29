<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reply extends Model {
  use HasFactory;

  protected $fillable = ["message"];

  // Inverse
  public function user(): BelongsTo {
    return $this->belongsTo(User::class, "id", "user_id");
  }

  public function comment(): BelongsTo {
    return $this->belongsTo(Comment::class, "id", "comment_id");
  }
}
