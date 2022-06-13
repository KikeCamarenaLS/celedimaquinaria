<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TratosVendedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratosVendedores', function (Blueprint $table) {
            $table->bigIncrements('id_tratosVendedores')->index();
            $table->bigInteger('idCliente');
            $table->bigInteger('id_vendedor');
            $table->bigInteger('proyecto');
            $table->bigInteger('mz');
            $table->bigInteger('lt');
            $table->string('Observaciones');
            $table->string('Estatus');
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
