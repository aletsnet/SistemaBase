<?php

use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bs_modulos')->insert([
            'nombre' => 'Sistema',
            'descripcion' => 'Apartado del sistema ',
            'icon' => 'fa fa-cogs',
            'css_class' => '',
            'orden' => 99,
            'activo' => true
        ]);

        DB::table('bs_servicios')->insert([
            'id_modulos' => 1,
            'nombre' => 'Permisos',
            'descripcion' => 'Crear usuarios y asignar permisos',
            'icon' => 'fa fa-user',
            'css_class' => '',
            'page_form' => 'SystemPermisos',
            'orden' => 1,
            'activo' => true
        ]);

        DB::table('bs_servicios')->insert([
            'id_modulos' => 1,
            'nombre' => 'Catalogos',
            'descripcion' => 'administrar los catalogos',
            'icon' => 'fa fa-user',
            'css_class' => '',
            'page_form' => 'SystemCatalogos',
            'orden' => 1,
            'activo' => true
        ]);

        DB::table('bs_servicios')->insert([
            'id_modulos' => 1,
            'nombre' => 'Roles',
            'descripcion' => 'administrar los roles',
            'icon' => 'fa fa-bookmark',
            'css_class' => '',
            'page_form' => 'SystemRoles',
            'orden' => 1,
            'activo' => true
        ]);

        DB::table('bs_roles')->insert([
            'nombre' => 'Administrador',
            'descripcion' => 'Usuario Administrador',
            'icon' => 'fa fa-user',
            'css_class' => '',
            'orden' => 1,
            'activo' => true
        ]);

        DB::table('bs_catalogos')->insert([
            'nombre' => 'Estatus',
            'descripcion' => 'Define el estatus del registro',
            'icon' => 'fa fa-user',
            'css_class' => '',
            'orden' => 1,
            'activo' => true
        ]);

        DB::table('bs_catalogos_detalles')->insert([
            'id_catalogos' => 1,
            'opcion' => 'Activo',
            'valor' => 1,
            'icon' => 'fa fa-user',
            'css_class' => '',
            'orden' => 1,
            'activo' => true
        ]);
        
        DB::table('bs_catalogos_detalles')->insert([
            'id_catalogos' => 1,
            'opcion' => 'Inactivo',
            'valor' => 2,
            'icon' => 'fa fa-user',
            'css_class' => '',
            'orden' => 1,
            'activo' => true
        ]);

    }
}
