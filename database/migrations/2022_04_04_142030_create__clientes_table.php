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
        Schema::create('_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('organizacion');
            $table->foreignId('direccion_id')
      ->constrained('direccion_clientes')
      ->onUpdate('cascade')
      ->onDelete('cascade');
            $table->string('telefono');
            $table->tinyText('interes');
            $table->tinyText('descripcion');
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
        Schema::dropIfExists('_clientes');
    }
};
