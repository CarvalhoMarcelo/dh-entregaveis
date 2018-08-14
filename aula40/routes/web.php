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

Route::get('/genre/{id}', 'GenreController@show');

Route::get('/filmes', 'FilmesController@formFilmes');
Route::post('/filmes/adicionar', 'FilmesController@adicionarFilmes'); 

Route::get('/filmes/listafilmes/{id}', 'FilmesController@listaFilmes');