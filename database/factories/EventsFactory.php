<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'slug' => fake()->slug(),
            'content' => fake()->paragraph(),
        ];
    }
}
