<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manga>
 */
class MangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(600, 600),
            'link' => $this->faker->url('http'),
            'rank' => $this->faker->randomNumber(2)
        ];
    }
}
