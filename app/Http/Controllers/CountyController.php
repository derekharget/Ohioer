<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountyController extends Controller
{

    public function countyHome(string $county)
    {
        if (env('APP_DEBUG') == 0) {
            $countyByAge = Cache::rememberForever('county_age_home_'.Str::lower($county),  function () use ($county) {

                return DB::table('ohio_citizen_data')
                    ->select(DB::raw('TIMESTAMPDIFF(YEAR, "ohio_citizen_data.date_of_birth", CURDATE()) AS age, count("ohio_citizen_data.id") as citizenAge'))
                    ->join('ohio_county', 'ohio_county.county_id', '=', 'ohio_citizen_data.county_number')
                    ->groupBy('age')
                    ->having('age', '<=', '120')
                    ->having('age', '>=', '18')
                    ->where('ohio_county.county_name', '=', $county)
                    ->get();
            });
        } else {
            $countyByAge = DB::table('ohio_citizen_data')
                ->select(DB::raw('TIMESTAMPDIFF(YEAR, ohio_citizen_data.date_of_birth, CURDATE()) AS age, count(ohio_citizen_data.id) as citizenAge'))
                ->join('ohio_county', 'ohio_county.county_id', '=', 'ohio_citizen_data.county_number')
                ->groupBy('age')
                ->having('age', '<=', '120')
                ->having('age', '>=', '18')
                ->where('ohio_county.county_name', '=', $county)
                ->get();
        }

        return view('county.countyhome', [
            'county' => $county,
            'countyByAge' => $countyByAge,
            ]);
    }

    public function countyIndex()
    {
        if (env('APP_DEBUG') == 0) {

            $showCounties = Cache::rememberForever('county_age_stats_page', function () {
                return DB::table('ohio_county')
                    ->select(DB::raw('ohio_county.county_id AS id, ohio_county.county_name AS name, count(ohio_citizen_data.id) AS citizens'))
                    ->join('ohio_citizen_data', 'ohio_county.county_id', '=', 'ohio_citizen_data.county_number')
                    ->groupBy('county_id')
                    ->get();
            });

        } else {
            $showCounties = DB::table('ohio_county')
                ->select(DB::raw('ohio_county.county_id AS id, ohio_county.county_name AS name, count(ohio_citizen_data.id) AS citizens'))
                ->join('ohio_citizen_data', 'ohio_county.county_id', '=', 'ohio_citizen_data.county_number')
                ->groupBy('county_id')
                ->get();

        }
        //dd($showCounties)

        return view('county.index', compact('showCounties'));
    }

    public function countyByAge(string $county, int $ageId)
    {

        if(env('APP_DEBUG') == 0) {

            $page = request()->has('page') ? request()->get('page') : 1;

            $countyByAge = Cache::rememberForever('county_'.Str::lower($county).'_age_'.$ageId.'_page_'.$page,  function () use ($county, $ageId) {

                return DB::table('ohio_citizen_data')
                    ->select('ohio_citizen_data.id', 'ohio_citizen_data.first_name', 'ohio_citizen_data.last_name', 'ohio_citizen_data.residential_address', 'ohio_citizen_data.residential_zip', 'ohio_citizen_data.date_of_birth')
                    ->join('ohio_county', 'ohio_county.county_id', '=', 'ohio_citizen_data.county_number')
                    ->where(DB::raw('TIMESTAMPDIFF(YEAR, ohio_citizen_data.date_of_birth, CURDATE())'), '=', $ageId)
                    ->where('ohio_county.county_name', '=', $county)->paginate(20);
            });
        } else {
            $countyByAge = DB::table('ohio_citizen_data')
                ->select('ohio_citizen_data.id', 'ohio_citizen_data.first_name', 'ohio_citizen_data.last_name', 'ohio_citizen_data.residential_address', 'ohio_citizen_data.residential_zip', 'ohio_citizen_data.date_of_birth')
                ->join('ohio_county', 'ohio_county.county_id', '=', 'ohio_citizen_data.county_number')
                ->where(DB::raw('TIMESTAMPDIFF(YEAR, ohio_citizen_data.date_of_birth, CURDATE())'), '=', $ageId)
                ->where('ohio_county.county_name', '=', $county)->paginate(20);
        }

        if($countyByAge->isEmpty()) abort(404);


        return view('county.countyByAge', compact('countyByAge'));
    }

}
