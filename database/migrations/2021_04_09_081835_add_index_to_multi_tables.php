<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToMultiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ohio_citizen_data', function (Blueprint $table) {
            $table->index(['id', 'date_of_birth', 'first_name', 'last_name', 'residential_zip', 'residential_address'], 'add_index_to_search');
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
            $table->dropIndex('add_index_to_search');
        });
    }
}
