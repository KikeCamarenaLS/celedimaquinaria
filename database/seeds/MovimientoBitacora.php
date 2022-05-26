<?php

use Illuminate\Database\Seeder;

class MovimientoBitacora extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //+
         $movimiento=DB::table('cat_movimiento')->insert([
    		'Movimiento' => 'Administrador',
    	]);
    	$movimiento=DB::table('cat_movimiento')->insert([
    		'Movimiento' => 'Personal',
    	]);
        $movimiento=DB::table('cat_movimiento')->insert([
            'Movimiento' => 'Vendedor',
        ]);
         $movimiento=DB::table('cat_movimiento')->insert([
            'Movimiento' => 'Ejecutivo de cuenta(Capturista)',
        ]);
          $movimiento=DB::table('cat_movimiento')->insert([
            'Movimiento' => 'Recursos Humanos',
        ]);
           $movimiento=DB::table('cat_movimiento')->insert([
            'Movimiento' => 'Clientes',
        ]);
            $movimiento=DB::table('cat_movimiento')->insert([
            'Movimiento' => 'Ejecutivo de proyectos',
        ]);
             

        





    	


        $estatus = ["ACTIVO" , "BAJA" , "ASIGNADO","EN_ESPERA"];

        for ($i=0; $i < count($estatus) ; $i++) {
            DB::table('cat_Estatus')->insert([
                'Estatus' => $estatus[$i]
            ]);
        }
    }
}
