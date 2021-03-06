<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->char('documento', 11);
            $table->string('direccion', 250);
            $table->char('telefono', 9);
            $table->integer('customertype_id')->unsigned();
            $table->foreign('customertype_id')->references('id')->on('customer_types');
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
