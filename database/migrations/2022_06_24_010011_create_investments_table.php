<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('partner_name', 100);
            $table->decimal('investment_amount', $precision = 8, $scale = 2);
            $table->string('currency', 15)->nullable();
            // $table->decimal('loan_amount', $precision = 8, $scale = 2); 
            // $table->decimal('final_amount', $precision = 8, $scale = 2);

            
            //  cada vez que haya una monto prestamo(loan_amount) se resta del monto inversion(investment_amount) y guardar el resultado

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
        Schema::dropIfExists('investments');
    }
}
