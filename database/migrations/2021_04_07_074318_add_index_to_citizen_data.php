<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToCitizenData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ohio_citizen_data', function (Blueprint $table) {
            $table->index('first_name');
            $table->index('last_name');
            $table->index(['first_name', 'last_name']);
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
            $table->dropIndex('first_name');
            $table->dropIndex('last_name');
            $table->dropIndex(['first_name', 'last_name']);
        });
    }
}
