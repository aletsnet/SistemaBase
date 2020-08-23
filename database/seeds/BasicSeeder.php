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
        Schema::create('bs_modulos', function (Blueprint $table) {
            $table->increments('id_modulos');
            $table->string('nombre',250);
            $table->text('descripcion')->nullable();
            $table->string('icon',150)->nullable();
            $table->string('css_class',250)->nullable();
            $table->integer('orden')->nullable();
            $table->boolean('activo')->default(true);
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }
}
