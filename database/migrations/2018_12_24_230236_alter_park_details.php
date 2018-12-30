<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterParkDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('park_details', function (Blueprint $table) {
            $table->longtext('ride_description');
            $table->longtext('resort_description');
            $table->longtext('restaurant_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('park_details', function (Blueprint $table) {
            //
        });
    }
}
