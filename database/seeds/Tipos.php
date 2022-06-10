<?php

use Illuminate\Database\Seeder;

class Tipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $tipo = ["TEXTO" ,"NUMERO ENTERO", "NUMERO DECIMAL", "CATALOGO"];

        for($i=0; $i < count($tipo) ; $i++) {

            DB::table('cat_tipos')->insert([
                'Tipo' => $tipo[$i],
            ]);
        }
        
    }
}
