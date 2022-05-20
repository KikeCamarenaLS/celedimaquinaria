<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



         $this->call(UsersTableSeeder::class);
         //$this->call(Bien::class);

         //$this->call(AdscripcionV2::class);
         //$this->call(Estatus::class);
         //$this->call(Tipos::class);
         $this->call(PermisosSeeder::class);
         $this->call(RolesSeeder::class);
         $this->call(RolPermisoAdminSeeder::class);
         $this->call(RolAdminSeeder::class);

         //$this->call(MovimientoBitacora::class);



    }
}
