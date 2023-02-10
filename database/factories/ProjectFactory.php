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
            'name' => fake()->unique()->firstName(),
            'description' => fake()->boolean()
            ? fake()->paragraph()
            : null,
            // Commento main_image per farsì che con il db:seed possa apparire la mia immagine di default.
            // 'main_image' => fake()->unique()->imageUrl(640, 480, 'animals', true),
            'release_date' => fake()->date(),
            'repo_link' => fake()->unique()->url(),
        ];
    }
}