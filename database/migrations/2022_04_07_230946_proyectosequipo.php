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
    {  // Esta tabla es necesaria ya que hay una relacion muchos a muchos:
       // para cada proyecto se asignan varios desarrollodores y
       // cada desarrollador esta asignado a varios proyectos 
        Schema::create('proyectosequipo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('empleado_id')
                ->constrained('users')
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
