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



Route::get('/', 'ActorController@index');
Route::get('{actor}','ActorController@show');
Route::get('create', 'ActorController@create');
Route::post('create', 'ActorController@store');
Route::get('{actor}/edit', 'ActorController@edit');
Route::put('{actor}/edit', 'ActorController@update');
Route::delete('{actor}', 'ActorController@destroy');


