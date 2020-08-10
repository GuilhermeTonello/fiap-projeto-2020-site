<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidasAsseguradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vidas_assegurados', function (Blueprint $table) {
            $table->id();
            $table->boolean('e_empresa');
            $table->foreignId('fk_assegurado');
            $table->foreign('fk_assegurado')->references('id')->on('assegurados');
            $table->foreignId('fk_empresa');
            $table->foreign('fk_empresa')->references('id')->on('empresas');
            $table->char('nome_vida', 255);
            $table->date('data_nascimento');
            $table->text('observacoes');
            $table->json('problemas_saude');
            $table->decimal('valor_apolice', 255, 2);
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
        Schema::dropIfExists('vidas_assegurados');
    }
}
