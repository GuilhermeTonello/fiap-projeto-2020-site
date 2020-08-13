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
            $table->char('sexo', 255);
            $table->char('email', 255)->unique();
            $table->char('senha', 255);
            $table->date('data_nascimento');
            $table->char('rg', 255);
            $table->char('cpf', 255)->unique();
            $table->json('conquistas');
            $table->char('telefone', 50);
            $table->json('endereco');
            $table->json('fk_servicos_prestados');
            $table->char('foto_rg', 50);
            $table->timestamps();
            $table->engine = 'InnoDB';
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
