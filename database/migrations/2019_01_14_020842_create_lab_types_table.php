<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lab_name');
            $table->string('country');
            $table->string('accreditation');
            $table->string('city');
            $table->string('contact');
            $table->string('contact_title')->nullable();
            $table->string('email_address');
            $table->string('address');
            $table->string('website');
            $table->string('status');
            $table->integer('price_day');
            $table->integer('processing_fee')->nullable();
            $table->integer('total_price');
            $table->smallInteger('currency');
            $table->string('test_site')->nullable();
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
        Schema::dropIfExists('lab_types');
    }
}
