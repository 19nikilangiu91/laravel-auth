<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'description' => fake()->paragraph(),
            'main_image' => fake()->imageUrl(640, 480, 'animals', true),
            'release_date' => fake()->date(),
            'repo_link' => fake()->url(),
        ];
    }
}