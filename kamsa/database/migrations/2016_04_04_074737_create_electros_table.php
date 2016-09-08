<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');//Nombre de electro('electrodomestico', 'moto')
            $table->integer('loan_id')->unsigned();//Id de prestamo
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
            $table->integer('wallet_id')->unsigned();//Id de cartera
            $table->foreign('wallet_id')->references('id')->on('wallets')->onDelete('cascade');
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
        Schema::drop('electros');
    }
}
