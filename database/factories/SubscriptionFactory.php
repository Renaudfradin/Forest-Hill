<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'title' => fake()->name(),
            'price' => fake()->randomDigit(),
            'content' => fake()->paragraph(),
        ];
    }
}
