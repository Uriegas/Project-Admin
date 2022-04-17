<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyectos>
 */
class ProyectosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->text,
            'cliente_id' => $this->faker->numberBetween(1, 10),
            'presupuesto' => $this->faker->randomFloat(2, 0, 100000),
            'inicio' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'fin' => $this->faker->dateTimeBetween('now', '+1 years'),
            'imagen' => $this->faker->imageUrl(400, 300),
        ];
    }
}
