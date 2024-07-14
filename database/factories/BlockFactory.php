<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlockFactory extends Factory
{
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'content' => fake()->paragraph(),
        ];
    }
}
