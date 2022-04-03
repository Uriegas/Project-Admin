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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departamento_id')
      ->constrained('departamentos')
      ->onUpdate('cascade')
      ->onDelete('cascade');
            $table->string('concepto');
            $table->unsignedInteger('cantidad');
            $table->decimal('total');
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
        Schema::dropIfExists('gastos');
    }
};
