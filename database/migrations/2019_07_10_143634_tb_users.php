<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('Nombre');
            $table->string('Apellido_Paterno');
            $table->string('Apellido_Materno');
            $table->string('Género');
            $table->date('fechaNac');
            
            $table->string('email')->uniqued();
            $table->string('password');
            $table->string('estatus');
            
            $table->string('Foto');

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
