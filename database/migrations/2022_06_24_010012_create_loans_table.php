<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->id();

            $table->unsignedBigInteger('id_clients'); 
            $table->foreign('id_clients')
                    ->references('id')
                    ->on('clients')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->decimal('loan_amount', $precision = 8, $scale = 2);
            $table->string('interest', 15);
            $table->decimal('total_interest', $precision = 8, $scale = 2);
            $table->integer('expenses');
            $table->integer('number_debts');
            $table->string('currency')->default('SOLES');
            $table->date('start_date');
            $table->decimal('total_pay', $precision = 8, $scale = 2);
            $table->text('clause', 120);

            $table->unsignedBigInteger('id_payments_types'); 
            $table->foreign('id_payments_types')
                    ->references('id')
                    ->on('payments_types')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                    
            $table->unsignedBigInteger('id_investments'); 
            $table->foreign('id_investments')
                    ->references('id')
                    ->on('investments')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->string('late_payment', 15)->nullable();//mora
            $table->decimal('total_late_payment', $precision = 8, $scale = 2)->nullable();
                    
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
        Schema::dropIfExists('loans');
    }
}
