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
                'no_identificacion' => 987456412,
                'nombre' => 'Nicolas Admin Muñoz',
                'cargo' => 'Director',
                'telefono' => 6543218,
                'email' => 'nicolas.velez99@hotmail.com',
                'password' => bcrypt('4465790n'),
        ]);

    }
}
