<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parks', function (Blueprint $table) {
            $table->longtext('description')->nullable();
        });

        Schema::table('rides', function (Blueprint $table) {
            $table->longtext('description')->nullable();
        });

        Schema::table('restaurants', function (Blueprint $table) {
            $table->longtext('description')->nullable();
        });

        Schema::table('resorts', function (Blueprint $table) {
            $table->longtext('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parks', function (Blueprint $table) {
            $table->dropColumn('description');
        });

        Schema::table('rides', function (Blueprint $table) {
            $table->dropColumn('description');
        });

        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropColumn('description');
        });

        Schema::table('resorts', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
