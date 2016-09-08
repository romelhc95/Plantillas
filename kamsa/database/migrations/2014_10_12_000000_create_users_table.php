<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');//Nombres
            $table->string('last_name');//Apellidos
            $table->string('email')->unique();//Correo electronico
            $table->string('password', 60);//Contraseña
            $table->enum('type', ['admin', 'user']);//Tipo de usuario->normal o administrador
            $table->rememberToken();//Encriptacion de contraseña
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
