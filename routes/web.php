<?php

use App\Http\Controllers\SearchCitizenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRecordController;
use App\Http\Controllers\IndexController;
use \App\Http\Controllers\CountyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/citizen/{id}', [UserRecordController::class, 'show'])->name('citizen');

Route::get('/search', [UserRecordController::class, 'search'])->name('search');

Route::get('/browse', [UserRecordController::class, 'browseIndex'])->name('browse');

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/about', [IndexController::class, 'about'])->name('about');


Route::prefix('/county')->group(function () {

    Route::get('/', [CountyController::class, 'countyIndex'])->name('countyIndex');

    Route::get('/{county}', [CountyController::class, 'countyHome'])->name('countyHome');

    Route::get('/{county}/age/{age}', [CountyController::class, 'countyByAge'])->name('countybyAge');

});
