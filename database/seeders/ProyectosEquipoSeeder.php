<?php

namespace Database\Seeders;

use App\Models\ProyectosEquipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectosEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProyectosEquipo::factory()->count(10)->create();
    }
}
