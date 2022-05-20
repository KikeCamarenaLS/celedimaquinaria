<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id_pagos')->index();
            $table->string('cliente');
            $table->bigInteger('id_proyecto');
            $table->string('mz');
            $table->string('lt');
            $table->date('fecha_pagare');
            $table->string('pagare');
            $table->string('concepto');
            $table->string('total');
            $table->string('intereses');
            $table->bigInteger('id_personal');
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
