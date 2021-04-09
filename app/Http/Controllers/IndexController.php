<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CitizenInfoModel;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
        {

            if(env('APP_DEBUG') == 0) {
                $totalUsers = Cache::rememberForever('citizen_count_index', function () {
                        return DB::table('ohio_citizen_data')->count();
                });
            } else {
                $totalUsers = DB::table('ohio_citizen_data')->count();
            }


            return view('index.index', compact('totalUsers'));
        }


    public function about()
    {
        return view('index.about');
    }
}
