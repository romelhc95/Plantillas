<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_loan');//Numero de prestamo
            $table->integer('days_overdue');//Dias atrasados
            $table->decimal('balance');//Saldo
            $table->decimal('mora', 6, 2);//Mora
            $table->decimal('total', 6, 2);//Total
            $table->decimal('letter', 6, 2);//Letra
            $table->integer('letter_pending');//Letra pendiente
            $table->date('fup');//Fecha unica de prestamo
            $table->date('due_date');//Fecha de vencimiento
            $table->integer('customer_id')->unsigned();//Id de cliente
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('entity_id')->unsigned();//Id de entidad
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
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
        Schema::drop('loans');
    }
}
