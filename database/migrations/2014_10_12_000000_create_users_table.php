<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_usuarios', function (Blueprint $table) {
            $table->increments('id_usuarios');
            $table->integer('id_roles')->nullable();
            $table->string('nombre');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user');
            $table->string('password');
            $table->string('foto')->nullable();
            $table->string('cargo')->nullable();
            $table->string('area')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('token')->nullable();
            $table->string('fecha_alta');
            $table->string('fecha_actualizado')->nullable();
            $table->boolean('activo')->default(true);
            $table->boolean('borrado')->default(false);
            
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
        Schema::dropIfExists('bs_usuarios');
    }
}
