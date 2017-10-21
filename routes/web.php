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
Route::get('/', "MainController@index");
Route::get("/messenger", "MainController@messenger");

Route::get("/missions", "MissionsController@index");
Route::post("/missions/add", "MissionsController@store");
Route::get("/missions/{mission}", "MissionsController@show");
Route::get("/missions/{mission}/auth", "MissionsController@auth");
Route::get("/missions/{mission}/edit", "MissionsController@edit");

Route::get("/lgus", "MissionsController@create");

Route::get("/volunteers", "VolunteersController@index");
Route::get("/volunteers/session/{volunteerid}", "VolunteersController@session");
Route::get("/volunteers/{mission}/{volunteer}", "VolunteersController@store");

Route::get("/donate/{mission}", "EquipmentsController@show");
Route::post("/donate/{mission}", "EquipmentsController@store");

Route::get('/promotions', function () {
    return view('promotions');
});
// Route::get("/trivia", "MainController@receive")->middleware("verify");
//
// Route::post("/trivia", "MainController@receive");
