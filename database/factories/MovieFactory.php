<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(rand(1,3), true),
            'description' => fake()->words(rand(3,20), true),
            'year' => rand(1950, 2024),
            'rate' => rand(1, 5),
            'img' => fake()->imageUrl(640, 480),
            'user_id' =>1,
        ];
    }
}
