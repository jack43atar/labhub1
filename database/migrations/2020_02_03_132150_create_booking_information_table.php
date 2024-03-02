<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_information', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('lab_id');
            $table->foreign('lab_id')->references('id')->on('lab_reservations')->onDelete('cascade');

            $table->string('email');
            $table->string('fax_number');
            $table->string('phone_one');
            $table->string('phone_two');
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
        Schema::dropIfExists('booking_information');
    }
}
