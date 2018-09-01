<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResortDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resort_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resort_id');
            $table->integer('park_id');
            $table->string('resort_type');
            $table->string('transport_options');
            $table->string('category');
            $table->integer('quick_service_restaurants');
            $table->integer('table_service_restaurants');
            $table->integer('gift_shop');
            $table->integer('arcade');
            $table->integer('pool');
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
        Schema::dropIfExists('resort_details');
    }
}
