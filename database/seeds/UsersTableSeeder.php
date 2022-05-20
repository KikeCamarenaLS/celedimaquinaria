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
                    'name' => 'Luis Enrique',
                    'email' => 'camarenaluis6@gmail.com',
                    'password' => bcrypt('123456'),
                    'estatus' => '1',
                ]);
                      DB::table('cat_proyectos')->insert([
            'proyecto' => 'NOPALITOS',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN DIONISIO',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'LAS PALOMAS',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'LITIGIO 1',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'LITIGIO 2',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'EL CARMEN',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'CUATRO CABALLERIAS',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'ALDAMA',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'MOZOYUCA',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'ZACUALTITLAS',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN BARTOLO IV',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'SAN BARTOLO V',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'CABALLERÍAS ETAPA I',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'CABALLERÍAS ETAPA II',
        ]);
        DB::table('cat_proyectos')->insert([
            'proyecto' => 'CABALLERÍAS ETAPA III',
        ]);
         DB::table('cat_proyectos')->insert([
            'proyecto' => 'BUGAMBILIAS',
        ]);

             
    }
}
