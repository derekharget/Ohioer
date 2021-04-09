<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class InitialCountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * @Array of Ohio county's
         */
        $ohio_county_list = collect([
            1 => "Adams",
            "Allen",
            "Ashland",
            "Ashtabula",
            "Athens",
            "Auglaize",
            "Belmont",
            "Brown",
            "Butler",
            "Carroll",
            "Champaign",
            "Clark",
            "Clermont",
            "Clinton",
            "Columbiana",
            "Coshocton",
            "Crawford",
            "Cuyahoga",
            "Darke",
            "Defiance",
            "Delaware",
            "Erie",
            "Fairfield",
            "Fayette",
            "Franklin",
            "Fulton",
            "Gallia",
            "Geauga",
            "Greene",
            "Guernsey",
            "Hamilton",
            "Hancock",
            "Hardin",
            "Harrison",
            "Henry",
            "Highland",
            "Hocking",
            "Holmes",
            "Huron",
            "Jackson",
            "Jefferson",
            "Knox",
            "Lake",
            "Lawrence",
            "Licking",
            "Logan",
            "Lorain",
            "Lucas",
            "Madison",
            "Mahoning",
            "Marion",
            "Medina",
            "Meigs",
            "Mercer",
            "Miami",
            "Monroe",
            "Montgomery",
            "Morgan",
            "Morrow",
            "Muskingum",
            "Noble",
            "Ottawa",
            "Paulding",
            "Perry",
            "Pickaway",
            "Pike",
            "Portage",
            "Preble",
            "Putnam",
            "Richland",
            "Ross",
            "Sandusky",
            "Scioto",
            "Seneca",
            "Shelby",
            "Stark",
            "Summit",
            "Trumbull",
            "Tuscarawas",
            "Union",
            "Van Wert",
            "Vinton",
            "Warren",
            "Washington",
            "Wayne",
            "Williams",
            "Wood",
            "Wyandot"
        ]);


        /*
         * Import the data into ohio_county, starting with ID 1, Adams
         */

        foreach ($ohio_county_list as $county_code => $county_name) {
            DB::table('ohio_county')->insert([
                'county_id' => $county_code,
                'county_name' => $county_name,
            ]);
        }
    }
}
