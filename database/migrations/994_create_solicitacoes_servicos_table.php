<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacoesServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacoes_servicos', function (Blueprint $table) {
            $table->id();
            $table->boolean('e_empresa');
            $table->foreignId('fk_empresa');
            $table->foreign('fk_empresa')->references('id')->on('empresas');
            $table->foreignId('fk_solicitante');
            $table->foreign('fk_solicitante')->references('id')->on('assegurados');
            $table->foreignId('fk_prestador');
            $table->foreign('fk_prestador')->references('id')->on('terceirizados');
            $table->foreignId('fk_servico');
            $table->foreign('fk_servico')->references('id')->on('servicos');
            $table->json('localizacao');
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
        Schema::dropIfExists('solicitacoes_servicos');
    }
}
