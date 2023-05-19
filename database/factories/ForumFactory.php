<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  protected $model = \App\Models\Forum::class;

  public function definition(): array {
    $isDeletedByUser = fake()->randomFloat(2, 0, 1) < 0.95;
    $isDeletedByAdmin = fake()->randomFloat(2, 0, 1) < 0.95;
    return [
      "title" => fake()
        ->unique()
        ->sentence(),
      "content" => json_encode([
        "time" => fake()
          ->dateTime()
          ->getTimestamp(),
        "blocks" => [
          [
            "id" => fake()
              ->unique()
              ->randomNumber(),
            "type" => "paragraph",
            "data" => [
              "text" => fake()->sentence(),
            ],
          ],
          [
            "id" => fake()
              ->unique()
              ->randomNumber(),
            "type" => "header",
            "data" => [
              "text" => fake()->sentence(),
              "level" => 3,
            ],
          ],
        ],
      ]),
      // 'upvote_count' => fake()->numberBetween(0, 3000),
      // 'downvote_count' => fake()->numberBetween(0, 1000),
      "is_deleted_by_user" => $isDeletedByUser ? 0 : 1,
      "is_removed_by_admin" => $isDeletedByAdmin ? 0 : 1,
    ];
  }
}
