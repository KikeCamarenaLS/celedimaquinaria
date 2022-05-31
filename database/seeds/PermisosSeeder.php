<?php

use Illuminate\Database\Seeder;


class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $permisos=['Administrador','Personal','Clientes','Recursos Humanos','Ejecutivo de cuenta(Capturista)','Ejecutivo de proyectos','Cobranza'];

    	for ($i=0; $i < count($permisos); $i++) {
    		DB::table('permissions')->insert([
                    'name' => $permisos[$i],
                    'guard_name'=> 'web'
                ]);
    	}
    }
}
