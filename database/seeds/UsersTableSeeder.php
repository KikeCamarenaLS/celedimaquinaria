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
                    'email' => 'admin',
                    'password' => bcrypt('123456'),
                    'estatus' => '1',
                ]);


             
       

             
    }
}
