<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',"Opex@create")->middleware("auth");

Route::get("/opex","Opex@create")->middleware("auth");
Route::get("/opex/create","Opex@create")->middleware("auth");
Route::get("/opex/view_session","Opex@view_session")->middleware("auth");

Route::get("auth","Auth\RegisterController@getRegister")->name("register");
Route::get("auth/register","Auth\RegisterController@getRegister");
Route::post("auth/register","Auth\RegisterController@create");

Route::get("login","Auth\LoginController@getLogin")->name("login");
Route::get("auth/login","Auth\LoginController@getLogin")->name("login");
Route::post("auth/login","Auth\LoginController@postLogin");

Route::get("auth/logout","Auth\LoginController@getLogout");



// belajar angular
// Route::resource("angular","Angular");
/*Route::get("/angular","Angular@index");
Route::get("/angular/intro","Angular@intro");
Route::get("/angular/application","Angular@application");
Route::get("/angular/module","Angular@module");
Route::get("/angular/bootstrap","Angular@bootstrap");
Route::get("/angular/directive/","Angular@directive");
Route::get("/angular/table/","Angular@table");

Route::get("/vue","Vue_ctrl@intro");
Route::get("/vue/intro","Vue_ctrl@intro");
Route::get("/vue/computed","Vue_ctrl@computed_properties");
Route::get("/vue/loop","Vue_ctrl@conditional_loop");
Route::get("/vue/list_method","Vue_ctrl@list_method");

Route::get("/angular/test","Angular@test");
Route::get("/angular/test_session","Angular@test_session");*/