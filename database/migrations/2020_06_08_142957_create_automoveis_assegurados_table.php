<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomoveisAsseguradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoveis_assegurados', function (Blueprint $table) {
            $table->id();
            $table->char('placa', 10);
            $table->char('renavam', 255);
            $table->text('relatorio_avaliacao');
            $table->decimal('valor_avaliacao', 255, 2);
            $table->foreignId('fk_modelo');
            $table->foreign('fk_modelo')->references('id')->on('modelos_auto_assegurados');
            $table->char('caminho_foto', 255);
            $table->boolean('e_empresa');
            $table->foreignId('fk_assegurado');
            $table->foreign('fk_assegurado')->references('id')->on('assegurados');
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
        Schema::dropIfExists('automoveis_assegurados');
    }
}
