<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisAsseguradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis_assegurados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_seguro');
            $table->foreign('fk_seguro')->references('id')->on('seguros');
            $table->boolean('e_empresa');
            $table->foreignId('fk_assegurado');
            $table->foreign('fk_assegurado')->references('id')->on('assegurados');
            $table->foreignId('fk_empresa');
            $table->foreign('fk_empresa')->references('id')->on('empresas');
            $table->text('relatorio_visita');
            $table->decimal('valor_pm', 255, 2);
            $table->json('endereco_imovel');
            $table->decimal('valor_imovel', 255, 2);
            $table->json('itens_assegurados');
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
        Schema::dropIfExists('imoveis_assegurados');
    }
}
