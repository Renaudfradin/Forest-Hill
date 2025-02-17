<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'slug' => fake()->slug(),
            'content' => fake()->paragraph(),
            'user_id' => User::class,
            'active' => fake()->boolean(),
        ];
    }
}
