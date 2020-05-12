<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api',], function ($router) {

    Route::post('login', 'API\AuthController@login');
    Route::post('logout', 'API\AuthController@logout');
    Route::post('refresh', 'API\AuthController@refresh');
    Route::post('me', 'API\AuthController@me');

});


Route::group(['middleware'=>'api',"prefix"=>"auth"],function(){
    //logout user from application
    Route::post('logout',"API\AuthController@logout");
    //get user info 
    Route::get("user","API\AuthController@user");
    Route::get("medecinAlertes","API\MedecinController@medecinAlertes");
    Route::get("medecinPatients","API\MedecinController@medecinPatients");
});

Route::group(['middleware' => 'api',"prefix"=>"patient"], function ($router) {

    Route::post('login', 'API\PatientController@login');
    Route::post("patientAlertes","API\PatientController@patientAlertes");

});