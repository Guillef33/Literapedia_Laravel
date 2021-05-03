<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleXUSersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_x_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id'); // columna pivot para usuarios
            $table->unsignedBigInteger('role_id'); // estamos definiendo la columna. son columnas pivot para roles de una tabla, permite navegar entre tablas para poder obtener datos y que sean consistentes. Que el usuario se corresponda con el usuario, que el rol con el rol

            $table->timestamps(); // aca viene created_at y updated_at

            $table->foreign('user_id')->references('id')->on('users'); //definimos la clave foranea (foreign), luego la columna a la que hace referencia (references) y luego la tabla (on)

            // la columna user id hace referencia a la columna id de la tabla users

            $table->foreign('role_id')->references('id')->on('roles');

            // lo que buscamos es poder asignarle un rol a un usuario. por ejemplo, que X sea administrador o usuario normal
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_x_users');
    }
}
