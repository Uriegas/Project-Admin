<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades_estrategias', function (Blueprint $table) {
            $table->id();
            $table->string('autor');
            $table->string('titulo');
            $table->tinyText('descripcion');
            $table->string('imagen');
            $table->date('inicio');
            $table->date('fin');
            $table->decimal('presupuesto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades_estrategias');
    }
};
