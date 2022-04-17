<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProyectosEquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // To Do: If this is executed many times there would be duplicated data
        return [
            'proyecto_id' => $this->faker->numberBetween(1, 10),
            'empleado_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
