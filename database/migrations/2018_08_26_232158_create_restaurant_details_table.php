<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('restaurant_id');
            $table->integer('park_id');
            $table->integer('quick_service');
            $table->integer('table_service');
            $table->integer('alcohol');
            $table->integer('dining_plan');
            $table->string('meal_types');
            $table->string('food_types');
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
        Schema::dropIfExists('restaurant_details');
    }
}
