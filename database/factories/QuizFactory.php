<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $courses = ['html', 'css', 'javascript', 'php', 'ruby', 'python', 'cpp', 'java', 'react', 'vue', 'laravel', 'rails', 'ionic'];
        $title = $this->faker->randomElement($courses);
        $dateTime = fake()->dateTimeBetween('-3 month', 'now', $timezone = null);
        $timezone = fake()->timezone();
        $attemptedDateTimeWithTimezone = Carbon::instance($dateTime)->setTimezone($timezone);
        $completedDateTime = Carbon::instance($dateTime)->addMinutes(fake()->numberBetween(5, 120));
        $completedDateTimeWithTimezone = $completedDateTime->setTimezone($timezone);
        return [
            'title' => $title,
            'score' => fake()->numberBetween(0, 10),
            'attempted_date' => $attemptedDateTimeWithTimezone->format('Y-m-d H:i:s'),
            'completed_time' => $completedDateTimeWithTimezone->format('Y-m-d H:i:s'),
        ];
    }
}
