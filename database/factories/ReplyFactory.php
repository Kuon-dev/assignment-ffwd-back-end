<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    $isDeletedByUser = fake()->randomFloat(2, 0, 1) < 0.95;
    $isDeletedByAdmin = fake()->randomFloat(2, 0, 1) < 0.95;
    return [
      "message" => fake()
        ->unique()
        ->sentence(),
      "is_deleted_by_user" => $isDeletedByUser ? 0 : 1,
      "is_removed_by_admin" => $isDeletedByAdmin ? 0 : 1,
    ];
  }
}
