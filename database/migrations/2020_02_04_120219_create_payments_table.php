<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('lab_reservation_id');
            $table->foreign('lab_reservation_id')->references('id')->on('lab_reservations')->onDelete('cascade');

            $table->string('currency');
            $table->string('amount');
            $table->string('name')->nullable();
            $table->string('postal_code');
            $table->string('network_status');
            $table->string('brand');
            $table->integer('exp_month');
            $table->integer('exp_year');
            $table->string('last4');
            $table->string('receipt_url');
            $table->string('source_id');
            $table->string('address_zip');


            $table->string('status');
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
        Schema::dropIfExists('payments');
    }
}
