<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->unique()->sentence();
        $categories = [
            'Shonen',
            'Shojo',
            'Seinen',
            'Josei',
            'Kodomomuke',
            'Isekai',
            'Harem',
            'Slice of Life',
            'Mecha',
            'Fantasy',
            'Science Fiction',
            'Horror',
            'Sports',
            'Historical',
            'Comedy',
            'Drama',
            'Adventure',
            'Mystery',
            'Supernatural',
            'Psychological'
        ];

        return [
            'name' => $name,
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement($categories),
            'image' => $this->faker->imageUrl(600, 600),
            'slug' => Str::slug($name),
            'link' => $this->faker->url('http'),
            'rank' => $this->faker->randomNumber(2)
        ];
    }
}
