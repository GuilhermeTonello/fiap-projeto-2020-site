<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsseguradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assegurados', function (Blueprint $table) {
            $table->id();
            $table->char('primeiro_nome', 255);
            $table->char('ultimo_nome', 255);
            $table->char('senha', 255);
            $table->char('sexo', 255);
            $table->char('genero', 255);
            $table->char('nome_social', 255);
            $table->char('rg', 255);
            $table->char('cpf', 255);
            $table->char('email', 255)->unique();
            $table->json('conquistas');
            $table->char('telefone', 50);
            $table->json('endereco');
            $table->date('data_nascimento');
            $table->char('foto_rg', 255);
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
        Schema::dropIfExists('assegurados');
    }
}
