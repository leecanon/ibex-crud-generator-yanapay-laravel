<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->string('job', 50)->nullable();
            $table->string('job_address', 80)->nullable();
            $table->string('business', 50)->nullable();
            $table->string('business_address', 80)->nullable();

            // $table->string('reference_name',30);
            // $table->integer('reference_phone_number', 12);

            $table->unsignedBigInteger('id_clients'); 
            $table->foreign('id_clients')
                    ->references('id')
                    ->on('clients')
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
        Schema::dropIfExists('customer_details');
    }
}
