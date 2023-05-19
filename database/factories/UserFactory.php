<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    $isBanned = fake()->randomFloat(2, 0, 1) < 0.95;
    return [
      "name" => fake()->name(),
      "email" => fake()
        ->unique()
        ->safeEmail(),
      "email_verified_at" => fake()->dateTimeBetween("-1 year", "now"),
      "phone_number" => fake()->phoneNumber(),
      "bio" => fake()->text(),
      "access_level" => "user",
      "password" =>
        '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      "remember_token" => Str::random(10),
      "is_banned" => $isBanned ? 0 : 1, //Get more is_banned = 0 / Not banned than ban
    ];
  }

  /**
   * Indicate that the model's email address should be unverified.
   */
  public function unverified(): static {
    return $this->state(
      fn(array $attributes) => [
        "email_verified_at" => null,
      ]
    );
  }
}
