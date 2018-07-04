<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionaBandaMusica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banda_musica', function (Blueprint $table) {
            $table->integer('banda_id')->unsigned();
            $table->foreign('banda_id')->references('id')->on('bandas');
            $table->integer('musica_id')->unsigned();
            $table->foreign('musica_id')->references('id')->on('musicas');
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
        Schema::dropIfExists('banda_musica');
    }
}
