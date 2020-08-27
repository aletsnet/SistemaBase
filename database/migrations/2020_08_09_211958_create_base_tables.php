<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
        
        Schema::create('bs_roles', function (Blueprint $table) {
            $table->increments('id_roles');
            $table->string('nombre',250);
            $table->text('descripcion')->nullable();
            $table->string('icon',150)->nullable();
            $table->string('css_class',250)->nullable();
            $table->integer('orden')->nullable();
            $table->boolean('activo')->default(true);
            $table->boolean('borrado')->default(false);
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
        
        Schema::create('bs_servicios', function (Blueprint $table) {
            $table->increments('id_servicios');
            $table->unsignedInteger('id_modulos');
            
            $table->string('nombre',250);
            $table->text('descripcion')->nullable();
            $table->string('icon',150)->nullable();
            $table->string('css_class',250)->nullable();
            $table->string('page_form',250)->nullable();
            $table->string('page_print',250)->nullable();
            $table->string('page_export',250)->nullable();
            $table->string('param',250)->nullable();
            $table->string('permisos',250)->nullable();
            $table->integer('orden')->nullable();
            $table->boolean('activo')->default(true);
            
            $table->foreign('id_modulos')->references('id_modulos')->on('bs_modulos');
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
        
        Schema::create('bs_catalogos', function (Blueprint $table) {
            $table->increments('id_catalogos');
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
        
        Schema::create('bs_catalogos_detalles', function (Blueprint $table) {
            $table->increments('id_catlogos_detalles');
            $table->unsignedInteger('id_catalogos');
            $table->string('opcion',250);
            $table->string('valor',250);
            $table->string('icon',150)->nullable();
            $table->string('picture',250)->nullable();
            $table->string('css_class',250)->nullable();
            $table->string('css_linetime',250)->nullable();
            $table->integer('orden')->nullable();
            $table->boolean('activo')->default(true);
            
            $table->foreign('id_catalogos')->references('id_catalogos')->on('bs_catalogos');
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bs_catalogos_detalles');
        Schema::dropIfExists('bs_catalogos');
        Schema::dropIfExists('bs_servicios');
        Schema::dropIfExists('bs_roles');
        Schema::dropIfExists('bs_modulos');
    }
}
