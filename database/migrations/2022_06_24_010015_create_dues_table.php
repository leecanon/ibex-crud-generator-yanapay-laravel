<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dues', function (Blueprint $table) {
            $table->id();
            
            //$table->date('debt_payment_date')->nullable(); //fecha del pago de la deuda cada cuatro 4
            //
            $table->string('num_debts_order'); //num_debts indica la cantidad de cuotas a pagar num_debts_order los ordena de primero al ultimo
            $table->decimal('debt_amount', $precision = 8, $scale = 2);
            $table->date('debt_payment_date');
            $table->string('state');


            $table->unsignedBigInteger('id_loans'); 
            $table->foreign('id_loans')
                    ->references('id')
                    ->on('loans')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('dues');
    }
}
