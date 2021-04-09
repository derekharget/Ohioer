<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountyNameMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ohio_county', function (Blueprint $table) {
            $table->integer('county_id')->primary()->unsigned();
            $table->string('county_name');
        });

        $county_seeder = new \Database\Seeders\InitialCountySeeder();
        $county_seeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ohio_county');
    }
}
