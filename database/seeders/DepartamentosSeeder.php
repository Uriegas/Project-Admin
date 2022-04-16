<?php

namespace Database\Seeders;

use App\Models\Departamentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Manual creation of departmes due to the fact that there a fixed
        // number of departmens and the seeder is not able to create them.
        $departamentos = [
            [
                'nombre' => 'Administración',
                'presupuesto' => Factory::create()->randomFloat(2, 0, 100000),
            ],
            [
                'nombre' => 'Finanzas',
                'presupuesto' => Factory::create()->randomFloat(2, 0, 100000),
            ],
            [
                'nombre' => 'Recursos Humanos',
                'presupuesto' => Factory::create()->randomFloat(2, 0, 100000),
            ],
            [
                'nombre' => 'Desarrollo',
                'presupuesto' => Factory::create()->randomFloat(2, 0, 100000),
            ],
            [
                'nombre' => 'Marketing y Ventas',
                'presupuesto' => Factory::create()->randomFloat(2, 0, 100000),
            ],
        ];
        foreach($departamentos as $departamento) {
            Departamentos::create($departamento);
        }
    }
}
