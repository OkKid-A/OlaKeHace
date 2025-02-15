<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'cupo' => $faker->numberBetween(1, 100),
            'lugar' => $faker->sentence,
            'imagen' => $faker->imageUrl(),
        ];
    }
}
