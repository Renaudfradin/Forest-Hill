<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'slug' => fake()->slug(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'mobile_phone' => fake()->phoneNumber(),
        ];
    }
}
