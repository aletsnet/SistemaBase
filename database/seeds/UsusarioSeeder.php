<?php

use Illuminate\Database\Seeder;

class UsusarioSeeder extends Seeder
{
    
    public function run()
    {
        //usuarios
        DB::table('bs_usuarios')->insert([
            'id_roles' => 1,
            'nombre' => 'Administrador',
            'user' => 'admin',
            'password' => sha("!Lumb3rj4ck"),
            'telefono' => "7712396643",
            'fecha_alta' => date("d-m-Y H:i:s")
        ]);
    }
}