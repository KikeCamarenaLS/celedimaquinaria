<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProyectoLotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectoLote', function (Blueprint $table) {
            $table->bigIncrements('id_proyecto_lote')->index();
            $table->bigInteger('idElemento');
            $table->bigInteger('proyecto');
            $table->bigInteger('mz');
            $table->bigInteger('lt');
            $table->bigInteger('superficie');
            $table->string('estatus');
            $table->string('tipoSuperficie');
            $table->string('Costo');
            $table->string('tipoVenta');
            $table->bigInteger('Ancho');
            $table->bigInteger('Largo');
            $table->string('colinancia');
            $table->string('claveCatastral');
            $table->date('fechaClaveCatastral');
            $table->rememberToken();
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
        //
    }
}
