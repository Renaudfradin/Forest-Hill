<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessFactory extends Factory
{
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'adress' => fake()->address(),
        ];
    }
}
