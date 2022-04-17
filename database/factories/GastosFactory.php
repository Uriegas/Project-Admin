<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gastos>
 */
class GastosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'departamento_id' => $this->faker->numberBetween(1, 5),
            'concepto' => $this->faker->word,
            'cantidad' => $this->faker->numberBetween(1, 10),
            'total' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
