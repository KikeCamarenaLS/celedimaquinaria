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

            $table->string('Medidas');
            $table->string('Colinancia');
            $table->string('TipoSuperficie');
            $table->string('TipoPredio');
            $table->string('Localización');
            $table->string('estatus');
            $table->string('TipoVenta');
            $table->string('CostoContado');
            $table->string('CostoContadoTotal');
            $table->string('CostoFinanciado');
            $table->string('CostoFinanciadoTotal');
            $table->string('ClaveCatastralPredio');
            $table->date('FechaClaveCatastralPredio');
            $table->string('ClaveCatastralLote');
            $table->date('FechaClaveCatastralLote');
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
