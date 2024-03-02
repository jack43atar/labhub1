<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabReservationServicePreferencePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_reservation_service_preference', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('lab_reservation_id');
            $table->foreign('lab_reservation_id')->references('id')->on('lab_reservations')->onDelete('cascade');

            $table->unsignedBigInteger('service_preference_id');
            $table->foreign('service_preference_id')->references('id')->on('service_preferences')->onDelete('cascade');

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
        Schema::dropIfExists('lab_reservation_service_preference_pivot');
    }
}
