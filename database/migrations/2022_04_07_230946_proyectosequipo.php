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
        Schema::create('proyectosequipo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id');
            $table->string('nombre_proyecto');
            $table->string('nombre_cliente');
            $table->string('presupuesto');
            $table->string('integrantes');
            $table->string('descripcion');
      //->constrained('proyectos')
      //->onUpdate('cascade')
      //->onDelete('cascade');
      $table->foreignId('empleado_id');
      //->constrained('empleados')
      //->onUpdate('cascade')
      //->onDelete('cascade');
      
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
        Schema::dropIfExists('proyectosequipo');
    }
};
