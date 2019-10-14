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

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        return view('welcome');
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
});
/*
Route::get('Configuration', 'ConfigurationsController@index');
Route::get('Configuration/json','ConfigurationsController@json');
Route::get('Configuration/Create','ConfigurationsController@create');
Route::post('Configuration/Save','ConfigurationsController@save');
Route::get('Configuration/edit/{id}','ConfigurationsController@edit');
*/