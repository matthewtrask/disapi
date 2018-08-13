<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRideDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ride_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ride_id');
            $table->integer('park_id');
            $table->integer('opening_year');
            $table->string('ride_type');
            $table->string('ride_vehicle');
            $table->integer('interactive_queue');
            $table->integer('gift_store_finish');
            $table->integer('single_rider');
            $table->integer('ride_photo');
            $table->integer('height_restricted');
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
        Schema::dropIfExists('ride_details');
    }
}
