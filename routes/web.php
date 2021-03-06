<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('dashboard', 'DashboardController@dashboard');

    Route::resources([
        'admin' => 'UserController',
        'profile' => 'ProfileController',
        'company' => 'CompanyController',
        'vessel' => 'VesselController',
        'permit_unit' => 'PermitUnitController',
    ]);
});
