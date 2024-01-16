<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manga>
 */
class MangaFactory extends Factory
{

    public function definition(): array
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(600, 600),
            'slug' => Str::slug($name),
            'link' => $this->faker->url('http'),
            'rank' => $this->faker->randomNumber(2),
            'id_category' => Category::pluck('id')->random(),
        ];
    }
}
