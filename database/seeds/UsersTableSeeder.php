<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

              $user=DB::table('users')->insert([
                    'Nombre' => 'Luis Enrique',
                    'Apellido_Paterno' => 'Camarena',
                    'Apellido_Materno' => 'Serratos',
                    'email' => 'camarenaluis6@gmail.com',
                    'password' => bcrypt('123456'),
                    'estatus' => '1',
                ]);


               DB::table('cat_proyectos')->insert([
            'proyecto' => 'EJIDO OZUMBILLA',
        ]);
                DB::table('cat_proyectos')->insert([
            'proyecto' => 'LA MAGDALENA III',
        ]);
                 DB::table('cat_proyectos')->insert([
            'proyecto' => 'GOLONDRINAS II',
        ]);
                  DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN ANDRES 2',
        ]);
                   DB::table('cat_proyectos')->insert([
            'proyecto' => 'LA MINA',
        ]);
                    DB::table('cat_proyectos')->insert([
            'proyecto' => 'TONANITLA AMPLIA',
        ]);
                     DB::table('cat_proyectos')->insert([
            'proyecto' => 'GOLONDRINAS I',
        ]);
                      DB::table('cat_proyectos')->insert([
            'proyecto' => 'CABALLERIAS I',
        ]);
                       DB::table('cat_proyectos')->insert([
            'proyecto' => 'CABALLERIAS II',
        ]);
                        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN BARTOLO IV',
        ]);
                         DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN DIONICIO',
        ]);
                      
       
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'LAS PALOMAS',
        ]);

         DB::table('cat_proyectos')->insert([
            'proyecto' => 'BUGAMBILIAS',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'EL CARMEN',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN BARTOLO V',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'ALDAMA',
        ]);


        DB::table('cat_proyectos')->insert([
            'proyecto' => 'LITIGIO 1',
        ]);
         DB::table('cat_proyectos')->insert([
            'proyecto' => 'CABALLERÍAS ETAPA III',
        ]);
         DB::table('cat_proyectos')->insert([
            'proyecto' => 'CABALLERÍAS ETAPA IV',
        ]);

        DB::table('cat_proyectos')->insert([
            'proyecto' => 'LITIGIO 2',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'MOZOYUCA',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'NOPALITOS',
        ]);

        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN PABLO VII',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN PABLO VIII',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN PABLO V',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN PABLO II',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN PABLO III',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN PABLO IV',
        ]);

        DB::table('cat_proyectos')->insert([
            'proyecto' => 'CAMPESTRE SAN PABLO XI',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN PABLO TECALCO
',
        ]);
         DB::table('cat_proyectos')->insert([
            'proyecto' => 'CAMPESTRE SAN PABLO XII',
        ]);
          DB::table('cat_proyectos')->insert([
            'proyecto' => 'CAMPESTRE SAN PABLO IX',
        ]);
           DB::table('cat_proyectos')->insert([
            'proyecto' => 'CAMPESTRE SAN PABLO X',
        ]);
        
      
       

             
    }
}
