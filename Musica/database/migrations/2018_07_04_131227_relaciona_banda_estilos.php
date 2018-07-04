<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionaBandaEstilos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bandas', function (Blueprint $table) {
            $table->integer('estilo_id')->unsigned()->after('id');
            $table->foreign('estilo_id')->references('id')->on('estilos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bandas', function (Blueprint $table) {
            $table->dropForeign('bandas_estilo_id_foreign');
            $table->dropColumn('estilo_id');
        });
    }
}
