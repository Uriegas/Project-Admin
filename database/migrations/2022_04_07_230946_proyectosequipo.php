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
            $table->foreignId('proyecto_id')
      ->constrained('proyectos')
      ->onUpdate('cascade')
      ->onDelete('cascade');
      $table->foreignId('empleado_id')
      ->constrained('empleados')
      ->onUpdate('cascade')
      ->onDelete('cascade');
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
