<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_reservations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('lab_type_id');
            $table->foreign('lab_type_id')->references('id')->on('lab_types')->onDelete('cascade');

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('full_part');
            $table->string('total_price');
            $table->integer('days');
            $table->mediumText('description');
            $table->string('company_contact_f_name');
            $table->string('company_contact_l_name');
            $table->string('company_address');
            $table->string('company_city');
            $table->string('company_state');
            $table->string('company_country');
            $table->string('company_zip_code');
            $table->string('reservation_email');
            $table->integer('status')->nullable();

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
        Schema::dropIfExists('lab_reservations');
    }
}
