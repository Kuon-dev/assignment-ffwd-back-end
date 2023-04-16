<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Forum::class;
    public function definition(): array
    {
        return [
            //'user_id' => fake()->sentence(),
            'title' => fake()->unique()->sentence(),
            'content' => fake()->unique()->text(),
            'upvote_count' => fake()->numberBetween(0, 3000),
            'downvote_count' => fake()->numberBetween(0, 1000),
            'is_deleted_by_user' => 0,
            'is_deleted_by_admin' => 0,
        ];
    }


}
