<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VSolicitud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('v_solicitud', function (Blueprint $table) {
            $table->bigIncrements('id_registro')->index();
            $table->string('archivo');
            $table->string('id_solicitante');
            $table->string('ayo');
            $table->string('fecha');
            $table->string('situacion');
            $table->string('comentario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
