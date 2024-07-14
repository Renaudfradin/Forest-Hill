<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class ReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
        ];
    }
}
