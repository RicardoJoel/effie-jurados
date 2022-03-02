<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_admin');
            $table->boolean('is_viewed');
            $table->boolean('jurado');
            $table->boolean('acepto');
            $table->string('email',100)->unique();
            $table->string('password',250);
            $table->string('nombre',100);
            $table->string('apellido',100)->nullable();
            $table->string('empresa',100)->nullable();
            $table->string('tipoempresa',100)->nullable();
            $table->string('cargo',100)->nullable();
            $table->string('telefono',100)->nullable();
            $table->unsignedInteger('edad')->nullable();
            $table->unsignedInteger('anosexperiencia')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->unsignedBigInteger('edicion_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('edicion_id')
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
        Schema::dropIfExists('users');
    }
}
