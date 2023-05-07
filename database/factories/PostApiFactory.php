<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostApi>
 */
class PostApiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(65),
            'description' => fake()->text,
            'text' => fake()->paragraph,
            'date-create' => fake()->date('Y-m-d'),
        ];
    }
}
