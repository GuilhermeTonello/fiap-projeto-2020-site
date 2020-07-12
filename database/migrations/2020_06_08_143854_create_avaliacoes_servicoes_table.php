<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacoesServicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes_servicoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_solicitacao');
            $table->foreign('fk_solicitacao')->references('id')->on('solicitacoes_servicos');
            $table->text('avaliacao');
            $table->integer('nota');
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
        Schema::dropIfExists('avaliacoes_servicoes');
    }
}
