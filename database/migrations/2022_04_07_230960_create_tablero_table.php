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
        Schema::create('tablero', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('inicio');
            $table->date('fin');
            $table->tinyText('descripcion');
            $table->foreignId('codigo_proyecto')
      ->constrained('proyectos')
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
        Schema::dropIfExists('tablero');
    }
};
