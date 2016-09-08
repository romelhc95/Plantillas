<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dni')->unique();//Documento Nacional de Identificacion
            $table->string('first_name');//Nombres
            $table->string('last_name');//Apellidos
            $table->integer('department_id')->unsigned();//Departamento(Piura, Tumbes, Lambayeque)
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            //Provincia(Sullana,Paita,Piura,Chiclayo,Talara,Lambayeque)
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            //Distrito(Sullana,Paita,Piura,Chiclayo,Tambogrande,Talara,Lambayeque)
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->string('address');//Direccion
            $table->string('phone');//Numero Telefonico
            $table->integer('user_id')->unsigned();//Id de Usuario
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('customers');
    }
}
