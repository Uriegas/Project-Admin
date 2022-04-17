<?php

namespace Database\Factories;

use App\Models\Proyectos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PresupuestoProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'proyecto_id' => $this->faker->numberBetween(1, Proyectos::count()),
            'concepto' => $this->faker->word,
            'cantidad' => $this->faker->numberBetween(1, 9999),
            'monto' => $this->faker->numberBetween(1, 9999),
        ];
    }
}
