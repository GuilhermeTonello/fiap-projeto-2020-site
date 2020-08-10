<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApolices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apolices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_seguro');
            $table->foreign('fk_seguro')->references('id')->on('seguros');
            $table->boolean('e_empresa');
            $table->foreignId('fk_assegurado')->nullable();
            $table->foreign('fk_assegurado')->references('id')->on('assegurados');
            $table->foreignId('fk_empresa')->nullable();
            $table->foreign('fk_empresa')->references('id')->on('empresas');
            $table->json('bens_assegurados');
            $table->char('descricao', 255);
            $table->int('parcelas', 8);
            $table->decimal('valor_pp', 8,2);
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
        Schema::dropIfExists('apolices');
    }
}
