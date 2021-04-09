<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OhioZipCodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ohio_zip_codes', function (Blueprint $table) {
            $table->char('zip', 10)->primary();
            $table->string('city', 125);
            $table->string('county', 125);
            $table->char('state', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ohio_zip_codes');
    }
}
