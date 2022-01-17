<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/gears', 'App\\Http\\Controllers\\GearController@index')
        ->name('gears.index');
Route::get('/employees', 'App\\Http\\Controllers\\EmployeeController@index')
        ->name('employees.index');
Route::get('/fuel_types', 'App\\Http\\Controllers\\FuelTypeController@index')
        ->name('fuel_types.index');
Route::get('/manufacturers', 'App\\Http\\Controllers\\ManufacturerController@index')
        ->name('manufacturers.index');
Route::get('/rentals', 'App\\Http\\Controllers\\RentalController@index')
        ->name('rentals.index');
Route::get('/users', 'App\\Http\\Controllers\\UserController@index')
        ->name('users.index');
Route::get('/vehicles', 'App\\Http\\Controllers\\VehicleController@index')
        ->name('vehicles.index');

//Route::post('/gears', 'GearController@store');
//Route::post('/employees', 'EmployeeController@store');
//Route::post('/fuel_types', 'Fuel_typeController@store');
//Route::post('/manufacturers', 'ManufacturerController@store');
//Route::post('/rentals', 'RentalController@store');
//Route::post('/users', 'UserController@store');
//Route::post('/vehicles', 'VehicleController@store');