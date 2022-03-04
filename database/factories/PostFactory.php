<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' =>  $this->faker->slug(),
            'subtitle' => $this->faker->text(),
            'content' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
            'publish' => $this->faker->boolean(),
            'user_id' => User::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
            'country_id' => Country::pluck('id')->random(),
        ];
    }
}
