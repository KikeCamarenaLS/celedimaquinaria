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
        $situacion = ["Disponible" ,"Apartado", "Enganches", "Financiado", "Liquidado", "Al corriente", "Atraso", "Rescisión", "Proceso de rescisión", "Donación", "En Pausa"];

        for($i=0; $i < count($situacion) ; $i++) {

            DB::table('cat_situacion')->insert([
                'situacion' => $situacion[$i],
            ]);
        }
        $permisos=['Administrador','Personal','Clientes','Recursos Humanos','Ejecutivo de cuenta(Capturista)','Ejecutivo de proyectos','Cobranza','Ejecutivo de Inventarios'];

    	for ($i=0; $i < count($permisos); $i++) {
    		DB::table('permissions')->insert([
                    'name' => $permisos[$i],
                    'guard_name'=> 'web'
                ]);
    	}
    }
}
