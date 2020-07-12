<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerceirizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceirizados', function (Blueprint $table) {
            $table->id();
            $table->char('primeiro_nome', 255);
            $table->char('ultimo_nome', 255);
            $table->char('email', 255);
            $table->json('conquistas');
            $table->char('telefone', 50);
            $table->json('endereco');
            $table->date('data_nascimento');
            $table->json('fk_servicos_prestados');
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
        Schema::dropIfExists('terceirizados');
    }
}
