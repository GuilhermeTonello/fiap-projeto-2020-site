<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosAutoAsseguradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_auto_assegurados', function (Blueprint $table) {
            $table->id();
            $table->char('nome', 255);
            $table->foreignId('fk_marca');
            $table->foreign('fk_marca')->references('id')->on('marcas_auto_assegurados');
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
        Schema::dropIfExists('modelos_auto_assegurados');
    }
}
