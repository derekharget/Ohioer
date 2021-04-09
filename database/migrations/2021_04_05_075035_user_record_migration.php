<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserRecordMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*
         * Data info can be found at https://www6.ohiosos.gov/ords/f?p=111:2::FILE_LAYOUT:NO:RP,2::
         */
        Schema::create('ohio_citizen_data', function (Blueprint $table) {
            $table->increments('id');

            // Person Name and date of birth
            $table->string('first_name', 50)->nullable();
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50) ->nullable();
            $table->date('date_of_birth')->nullable();

            //Home Address Information
            $table->string('residential_address', 100)->nullable();
            $table->string('residential_city', 50)->nullable();
            $table->string('residential_state', 20)->nullable();
            $table->string('residential_zip', 5)->nullable();

            //County Relation
            $table->integer('county_number')->unsigned(); // County Identifier

            /*
             * Temporary simplification
             */
            // City Information
            $table->string('registered_city', 80)->nullable();
            $table->string('county_court_district', 80)->nullable();
            $table->string('congressional_district', 2)->nullable();
            $table->string('court_of_appeals', 2)->nullable();
            $table->string('township', 20)->nullable();
            $table->string('village', 20)->nullable();
            $table->string('ward', 20)->nullable();

            //Education Information
            $table->string('edu_service_center_district', 80)->nullable();
            $table->string('exempted_vill_school_district', 80)->nullable();
            $table->string('library', 80)->nullable();
            $table->string('local_school_district', 80)->nullable();
            $table->string('state_board_of_education', 2)->nullable();

            //Law Enforcement Information
            $table->string('municipal_court_district', 80)->nullable();
            $table->string('precinct_name', 80)->nullable();
            $table->string('precinct_code', 20)->nullable();

            //State Representation Data
            $table->string('state_representative_district', 2)->nullable();
            $table->string('state_senate_district', 2)->nullable();

            //Party Affiliation
            $table->date('voter_registration_date')->nullable();
            $table->string('party_affiliation', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ohio_citizen_data');
    }
}
