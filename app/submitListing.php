<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class submitListing extends Model
{
    //
    protected $guarded = [
        'id',
        'businessName',
        'city',
        'shortBusinessDesc',
        'longBusinessDesc',
        'businessStreetAddress',
        'businessCity',
        'businessState',
        'businessZIP',
        'businessCountry',
        'businessURL',
        'linkTextOpt',
        'businessPhoneNumber',
        'businessFax',
        'businessContactEmail',
        'accreditingBody',
        'testFacility',
        'testCategory',
        'testStandard',
        'certification',
        'file'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submitListing', function (Blueprint $table) {
            $table->increments('id');
            $table->text('businessName');
            $table->text('city');
            $table->longText('shortBusinessDesc');
            $table->longText('longBusinessDesc');
            $table->text('businessStreetAddress');
            $table->text('businessCity');
            $table->text('businessState');
            $table->number('businessZIP');
            $table->text('businessCountry');
            $table->string('businessURL', 200);
            $table->text('linkTextOpt')->nullable();
            $table->number('businessPhoneNumber');
            $table->number('businessFax');
            $table->string('businessContactEmail')->unique();
            $table->text('accreditingBody');
            $table->text('testFacility');
            $table->text('testCategory');
            $table->text('testStandard');
            $table->text('certification');
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
        Schema::dropIfExists('submitListing');
    }
}
