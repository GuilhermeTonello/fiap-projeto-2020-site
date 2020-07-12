<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_app', function (Blueprint $table) {
            $table->id();
            $table->char('nome_usuario', 255);
            $table->char('hash', 5);
            $table->char('senha', 255);
            $table->boolean('e_empresa');
            $table->foreignId('fk_cliente');
            $table->foreign('fk_cliente')->references('id')->on('assegurados');
            $table->foreignId('fk_empresa');
            $table->foreign('fk_empresa')->references('id')->on('empresas');
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
        Schema::dropIfExists('usuarios_app');
    }
}
