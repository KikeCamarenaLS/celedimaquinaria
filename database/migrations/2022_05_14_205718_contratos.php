<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->bigIncrements('id_contratos')->index();
            $table->bigInteger('N_Cliente');
            $table->date('FechaVenta');
            $table->string('Enganche');
            $table->date('FechaContrato');
            $table->bigInteger('Proyecto');
            $table->string('Mz');
            $table->string('Lt');
            $table->string('Superficie');
            $table->string('TipoSuperficie');
            $table->string('TipoPredio');
            $table->string('Vendedor');
            $table->string('Adquisicion');
            $table->bigInteger('N_Parcialidades');
            $table->string('Costo');
            $table->bigInteger('DiaPago');
            $table->string('MontoMensual');
            $table->string('TelefonoAval');
            $table->string('Parentesco');
            $table->string('nombre_aval');
            $table->string('Interes');
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
