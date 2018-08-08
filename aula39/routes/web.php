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

Route::get('/actors/{lista?}', 'ActorsController@formAtores'); 
Route::post('/actors/add', 'ActorsController@add'); 
Route::get('/actor/form_edit/{id}', 'ActorsController@edit'); 
Route::put('/actor/edit/{id}', 'ActorsController@update'); 
Route::get('/actor/delete/{id}', 'ActorsController@destroy'); 
Route::delete('/actor/delete/{id}', 'ActorsController@destroy1'); 
