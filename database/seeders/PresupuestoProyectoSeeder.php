<?php

namespace Database\Seeders;

use App\Models\PresupuestoProyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresupuestoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PresupuestoProyecto::factory(200)->create();
    }
}
