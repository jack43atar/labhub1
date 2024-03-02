<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabReservationProductDescriptionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_reservation_product', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('lab_reservation_id');
            $table->foreign('lab_reservation_id')->references('id')->on('lab_reservations')->onDelete('cascade');

            $table->unsignedBigInteger('product_description_id');
            $table->foreign('product_description_id')->references('id')->on('product_descriptions')->onDelete('cascade');

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
        Schema::dropIfExists('lab_reservation_product_description_pivot');
    }
}
