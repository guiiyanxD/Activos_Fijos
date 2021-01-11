<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id('id_contacto');
            $table->unsignedBigInteger('usuario_id');
            $table->string('direccion')->nullable();
            $table->integer('celular')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('email_personal');
            $table->foreign('usuario_id')->references('id_usuario')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('contactos');
    }
}
