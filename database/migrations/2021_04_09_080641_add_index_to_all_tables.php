<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ohio_citizen_data', function (Blueprint $table) {
            $table->index('county_number');
            $table->index('date_of_birth');
            $table->index('residential_zip');
        });
        Schema::table('ohio_county', function (Blueprint $table) {
            $table->index('county_id');
            $table->index('county_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ohio_citizen_data', function (Blueprint $table) {
            $table->dropIndex('county_number');
            $table->dropIndex('date_of_birth');
            $table->dropIndex('residential_zip');
        });
        Schema::table('ohio_county', function (Blueprint $table) {
            $table->dropIndex('county_id');
            $table->dropIndex('county_name');

        });
    }
}
