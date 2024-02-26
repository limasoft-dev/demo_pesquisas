<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->sentence(3),
            'data' => $this->faker->date(),
            'localidade' => $this->faker->city(),
            'tipo' => $this->faker->randomElement(['Lazer','Compete']),
            'ativo' => $this->faker->boolean(),
        ];
    }
}
