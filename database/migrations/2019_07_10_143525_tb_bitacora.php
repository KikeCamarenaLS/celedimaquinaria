<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbBitacora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bitacora', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ID_Bitacora')->index();
            $table->bigInteger('ID_EMPLEADO');

            $table->bigInteger('CVE_MOVIMIENTO');
            $table->string('Movimiento',1200);
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
