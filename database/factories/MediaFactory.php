<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'src' => $this->faker->imageUrl(),
            'mime_type' => $this->faker->mimeType(),
            'title' => $this->faker->word(),
            'alt' => $this->faker->sentence(),
            'post_id' => Post::pluck('id')->random(),

        ];
    }
}
