<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPermisoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_permiso_usuario', function (Blueprint $table) {
            $table->bigIncrements('ID_REGISTRO')->index();
            $table->bigInteger('ID')->unsigned();
            $table->foreign('ID')
            ->references('id')->on('users');
            $table->bigInteger('ID_Permiso')->unsigned();
            $table->foreign('ID_Permiso')
            ->references('ID_Permiso')->on('cat_permiso');
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
