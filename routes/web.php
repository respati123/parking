<?php

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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index');

Auth::routes();


Route::prefix('customers')->group(function () {
    Route::resource('list', 'ListCustomerController');
    Route::resource('loyalty', 'LoyaltyController');
});

Route::prefix('parking')->group(function () {
    Route::resource('location', 'LocationController');
    Route::resource('category', 'CategoryController');
    Route::resource('class', 'ClassController');
    Route::resource('building', 'BuildingController');
});

Route::prefix('vehicles')->group(function () {
    Route::resource('vehicles_type', 'VehicleTypeController');
    Route::resource('vehicles_brand', 'VehicleBrandController');
});

Route::prefix('financial')->group(function () {
    Route::resource('currency', 'CurrencyController');
    Route::resource('tax', 'TaxController');
    Route::resource('tariff', 'TariffController');
});

Route::prefix('user_account')->group(function () {
    Route::resource('time_shift', 'TimeShiftController');
    Route::resource('employess', 'EmployessController');
});

Route::resource('settings', 'SettingsController');
Route::resource('dashboard', 'DashboardController');



