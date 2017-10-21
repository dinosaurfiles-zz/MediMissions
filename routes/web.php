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
    return view('welcome');
});

Route::get("/missions", "MissionsController@index");
Route::get("/missions/{mission}", "MissionsController@show");

Route::get("/lgus", "VolunteersController@index");

Route::get("/volunteers", "VolunteersController@index");

Route::get("/trivia", "MainController@receive")->middleware("verify");

Route::post("trivia", "MainController@receive");
