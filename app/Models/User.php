<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable {
  use HasApiTokens, HasFactory, Notifiable, HasRoles;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    "name",
    "email",
    "phone_number",
    "bio",
    "password",
    "access_level",
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = ["password", "remember_token", "access_level"];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    "email_verified_at" => "datetime",
  ];

  //Relationships
  // Forum
  public function forum(): HasMany {
    return $this->hasMany(Forum::class, "user_id", "id");
  }

  // Comment
  public function comment(): HasMany {
    return $this->hasMany(Comment::class, "id", "comment_id");
  }

  // Reply  -- A Forum has Comments which have Replies
  /*
  public function reply(): HasMany {
    return $this->hasMany(Reply::class);
  }
  */

  // Quiz
  public function quiz(): HasMany {
    return $this->hasMany(Quiz::class, "id", "quiz_id");
  }

  // Feedback
  public function feedback(): HasMany {
    return $this->hasMany(Feedback::class, "id", "feedback_id");
  }

  // Vote
  public function vote(): HasMany {
    return $this->hasMany(Vote::class, "id", "vote_id");
  }
}
