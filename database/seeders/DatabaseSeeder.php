<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Forum;
use App\Models\Reply;
use App\Models\Comment;
use App\Models\Quiz;
use App\Models\Feedback;
use App\Models\Vote;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
# use Spatie\Permission\Models\Role;
# use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   */
  public function run(): void {
    // ==========================================
    // |  Create 100 users
    // | ----------------------------------------
    /*
        $rootPerms = Role::create(['name' => 'root']); // Spatie's Permission
        $userPerms = Role::create(['name' => 'user']); // Spatie's Permission
        $adminPerms = Role::create(['name' => 'admin']); // Spatie's Permission
        */
    $users = [];
    for ($x = 0; $x <= 100; $x++) {
      $defaultUser = User::factory()->create();
      // $defaultUser->assignRole($userPerms);
      $users[] = $defaultUser;
    }

    $rootUser = User::factory()->create([
      "name" => "Root",
      "email" => "admin@example.com",
      "access_level" => "root",
    ]);

    // $rootUser->assignRole($rootPerms);

    // ==========================================
    // |  Create forums
    // | ----------------------------------------
    $forums = [];
    for ($x = 0; $x <= 1000; $x++) {
      $user = $users[array_rand($users)];
      $forums[] = Forum::factory()->create([
        "user_id" => $user->id,
      ]);
    }

    // ==========================================
    // |  Create comments
    // | ----------------------------------------
    $comments = [];
    for ($x = 0; $x <= 3000; $x++) {
      $user = $users[array_rand($users)];
      $forum = $forums[array_rand($forums)];
      $comments[] = Comment::factory()->create([
        "user_id" => $user->id,
        "forum_id" => $forum->id,
      ]);
    }

    // ==========================================
    // |  Create replies
    // | ----------------------------------------
    $replies = [];
    for ($x = 0; $x <= 2000; $x++) {
      $user = $users[array_rand($users)];
      $comment = $comments[array_rand($comments)];
      $replies[] = Reply::factory()->create([
        "user_id" => $user->id,
        "comment_id" => $comment->id,
      ]);
    }

    // ==========================================
    // |  Create quizzes
    // | ----------------------------------------
    $quizzes = [];
    for ($x = 0; $x <= 1000; $x++) {
      $user = $users[array_rand($users)];
      $quizzes[] = Quiz::factory()->create([
        "user_id" => $user->id,
      ]);
    }

    // ==========================================
    // |  Create feedback
    // | ----------------------------------------
    $feedback = [];
    for ($x = 0; $x <= 1000; $x++) {
      $user = $users[array_rand($users)];
      $quiz = $quizzes[array_rand($quizzes)];
      $feedback[] = Feedback::factory()->create([
        "user_id" => $user->id,
        "quiz_id" => $quiz->id,
      ]);
    }

    // ==========================================
    // |  Create vote
    // | ----------------------------------------
    $votes = [];
    $unique_votes_count = 10000;
    while (count($votes) < $unique_votes_count) {
      $user = $users[array_rand($users)];
      $forum = $forums[array_rand($forums)];
      // Check if a vote record with the given user_id and forum_id already exists
      $existing_vote = Vote::where("user_id", $user->id)
        ->where("forum_id", $forum->id)
        ->first();
      if (!$existing_vote) {
        $votes[] = Vote::factory()->create([
          "user_id" => $user->id,
          "forum_id" => $forum->id,
        ]);
      }
    }
  }
}
