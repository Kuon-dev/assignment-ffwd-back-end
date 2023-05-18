<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Forum extends Model {
  use HasFactory;

  protected $fillable = [
    "user_id",
    "title",
    "content",
    "is_deleted_by_user",
    "is_deleted_by_admin",
  ];

  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }

  // Comment
  /**
   * Get the comments of forum.
   */
  public function comment(): HasMany {
    return $this->hasMany(Comment::class, 'id', 'comment_id');
  }

  /*
  public function reply(): HasMany {
    return $this->hasMany(Reply::class);
  }
  */

  // Vote
  public function votes(): HasMany {
    return $this->hasMany(Vote::class, 'forum_id', 'id');
  }
}
