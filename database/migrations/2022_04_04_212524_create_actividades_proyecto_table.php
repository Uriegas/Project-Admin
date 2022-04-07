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
        Schema::create('actividades_proyecto', function (Blueprint $table) {
            $table->id();
            $table->tinyText('descripcion');
            $table->foreignId('encargado')
            ->constrained('empleados')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('proyecto_id')
            ->constrained('proyectos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->date('inicio');
            $table->date('fin');
            $table->tinyText('actividades');
            $table->tinyText('comentario');
            $table->string('estatus');
            $table->string('color');
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
        Schema::dropIfExists('actividades_proyecto');
    }
};
