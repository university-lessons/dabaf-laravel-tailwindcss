<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => fake()->randomElement(['VW', 'GM', 'Fiat', 'Ford']),
            'model' => fake()->randomElement(['Fusca', 'Brasilia', 'Uno', 'Corsa', 'Corcel']),
            'hp' => fake()->numberBetween(60,120),
            'photoUrl' => fake()->imageUrl(320, 240, 'Car')
        ];
    }
}
