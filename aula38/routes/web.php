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

//Exercicio 1
Route::get('/filmes', 'FilmesController@formFilmes');
Route::post('/filmes/adicionar', 'FilmesController@adicionarFilmes'); 

//Exercicio 1d
Route::get('/actors/{lista?}', 'ActorsController@formAtores'); 

//Exercicio 2a
Route::post('/actors/add', 'ActorsController@add'); 

//Exercicio 2b
Route::get('/actor/form_edit/{id}', 'ActorsController@edit'); 

//Exercicio 2c
Route::put('/actor/edit/{id}', 'ActorsController@update'); 

//Exercicio 2d
Route::get('/actor/delete/{id}', 'ActorsController@destroy'); 

//Exercicio 2e
Route::delete('/actor/delete/{id}', 'ActorsController@destroy1'); 
