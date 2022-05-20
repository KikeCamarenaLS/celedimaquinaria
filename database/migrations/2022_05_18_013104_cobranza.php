<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cobranza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contrato_cobranza', function (Blueprint $table) {
            $table->bigIncrements('id_contrato_cobranza')->index();
            $table->bigInteger('N_Cliente');
            $table->date('FechaApartado');
            $table->string('Apartado');
            $table->date('FechaEnganche');
            $table->bigInteger('ComplementoEnganche');
            $table->string('Enganche');
            $table->string('CostoLote');
            $table->string('DiaPago');
            $table->bigInteger('vendedor');
            $table->string('Comision1');
            $table->string('Comision2');
            $table->string('EstatusVenta');
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
