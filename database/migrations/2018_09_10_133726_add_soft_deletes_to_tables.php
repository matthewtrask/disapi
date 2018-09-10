<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeletesToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parks', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('park_details', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('rides', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('ride_details', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('resorts', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('resort_details', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('restaurants', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('restaurant_details', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
