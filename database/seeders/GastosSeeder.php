<?php

namespace Database\Seeders;

use Database\Factories\GastosFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GastosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GastosFactory::new()->times(10)->create();
    }
}
