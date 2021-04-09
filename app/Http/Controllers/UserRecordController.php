<?php

namespace App\Http\Controllers;
use App\Models\CitizenInfoModel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserRecordController extends Controller
{
    public function show(int $id)
    {



        if(env('APP_DEBUG') == 0) {

            $citizen = Cache::rememberForever('citizen_page_' . $id, function () use ($id) {
                return CitizenInfoModel::find($id);
            });
        } else {
            $citizen = CitizenInfoModel::find($id);
        }

        return view('citizen.show', [
            'full_name' => $citizen->getFullName(),
            'first_name' => $citizen->properFirstName(),
            'middle_name' => $citizen->properMiddleName(),
            'last_name' => $citizen->properLastName(),
            'dob' => $citizen->date_of_birth,
            'citizen_age' => $citizen->getAge(),
            'home_address' => $citizen->AddressFormat(),
            'home_city' => $citizen->CityFormat(),
            'home_state' => $citizen->StateFormat(),
            'home_zip' => $citizen->residential_zip,
            'county_name' => $citizen->getUserCountyName(),
            'city' => $citizen->RegCityFormat(),
            'township' => $citizen->RegTownshipFormat(),
            'village' => $citizen->RegVillageFormat(),
            'political_party' => $citizen->PolicalPartyAffilation(),
            'google_map_address' => $citizen->generateFullGoogleMapAddress(),
        ]);
    }


        public function search(Request $request){
            // Get the search value from the request
            $first_name_search = $request->input('first');
            $last_name_search = $request->input('last');


            if (!empty($first_name_search) || !empty($last_name_search)) {

                $page = request()->has('page') ? request()->get('page') : 1;

                if(env('APP_DEBUG') == 0) {

                    $citizen_user_data = Cache::rememberForever('citizen_search_'.$first_name_search.'_'.$last_name_search.'_'.$page, function () use ($first_name_search, $last_name_search) {

                        $citizen_user_data = CitizenInfoModel::query();

                        if (!empty($first_name_search)) {
                            $citizen_user_data = $citizen_user_data->where('first_name', 'LIKE', $first_name_search);
                        }

                        if (!empty($last_name_search)) {
                            $citizen_user_data = $citizen_user_data->where('last_name', 'LIKE', $last_name_search);
                        }

                        $cached_data = $citizen_user_data->paginate(20)
                            ->appends(request()->query());

                        return $cached_data;
                    });

                    } else {

                        $citizen_user_data = CitizenInfoModel::query();

                        if (!empty($first_name_search)) {
                            $citizen_user_data = $citizen_user_data->where('first_name', 'LIKE', $first_name_search);
                        }

                        if (!empty($last_name_search)) {
                            $citizen_user_data = $citizen_user_data->where('last_name', 'LIKE', $last_name_search);
                        }

                        $citizen_user_data = $citizen_user_data->paginate(20)
                            ->appends(request()->query());

                    }



                return view('search.search', compact('citizen_user_data'));
            } else {
                return view('search.index');
            }



        }

        public function browseIndex(){


           if(env('APP_DEBUG') == 0) {
                $page = request()->has('page') ? request()->get('page') : 1;

                $citizen_user_data = Cache::rememberForever('browse_page_' . $page, function () {
                    return CitizenInfoModel::select('id','first_name','middle_name', 'last_name', 'residential_address', 'residential_zip', 'date_of_birth')->orderBy('id', 'asc')->paginate(20);
                });
            } else {
                $citizen_user_data = CitizenInfoModel::select('id','first_name','middle_name', 'last_name', 'residential_address', 'residential_zip', 'date_of_birth')->orderBy('id', 'asc')->paginate(20);
            }

            return view('search.search', compact('citizen_user_data'));
        }


}
