<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('park_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('park_id');
            $table->string('central_attraction');
            $table->string('year_opened');
            $table->integer('ride_count');
            $table->integer('restaurant_count');
            $table->integer('size');
            $table->integer('resort_count');
            $table->integer('fireworks');
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
        Schema::dropIfExists('park_details');
    }
}
