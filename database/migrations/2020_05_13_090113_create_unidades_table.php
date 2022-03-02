<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad', function (Blueprint $table) {
            $table->id('idunidad');
            $table->varchar('nombreunidad',150);
            $table->varchar('descripcion',500);
            $table->unsignedInteger('orden');
            $table->unsignedInteger('tiempoestimado');
            $table->unsignedBigInteger('idedicion');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idedicion')
                ->references('id')
                ->on('ediciones')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad');
    }
}
