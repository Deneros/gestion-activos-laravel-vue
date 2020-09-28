<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
                'tipo_usuario'=> 'Admin',
                'tipo_identificacion' => 'Cedula de Ciudadania',
                'no_identificacion' => 98745612,
                'nombre' => 'Camila Piedrahita',
                'cargo' => 'Profesora',
                'telefono' => 6543218,
                'email' => 'kami199924maria@gmail.com',
                'password' => bcrypt('camila'),
        ]);

    }
}
