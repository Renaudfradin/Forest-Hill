<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'activitys' => Activity::class,
            'planning' => fake()->name(),
            'adress' => fake()->name(),
            'location' => fake()->address(),
            'location_detail' => fake()->address(),
            'hourly' => fake()->name(),
        ];
    }
}
