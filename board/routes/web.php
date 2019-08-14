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

Route::get('/news', "HomeController@index");
Route::get('/news/{id}', "HomeController@show");
Route::get('/login', "HomeController@login");
Route::post('/login/check', "HomeController@check");
Route::get('/admin', "HomeController@admin");
Route::get('/add', "HomeController@add");
Route::post('/add/check', "HomeController@add_check");
Route::get('/edit/{id}', "HomeController@edit");
Route::post('/update/{id}', "HomeController@update");


