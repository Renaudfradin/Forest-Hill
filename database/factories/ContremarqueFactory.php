<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
class ContremarqueFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tile' => fake()->name(),
            'slug' => fake()->slug(),
            'npass' => fake()->randomDigit(),
            'reprise' => fake()->dateTime(),
            'typem' => fake()->name(),
            'business_id' => Business::class,
            'subscription_id' => Subscription::class,
            'user_id' => User::class,
        ];
    }
}
