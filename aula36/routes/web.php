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


//Exercicio 1b
Route::get('/filme/{id}', 'FilmesController@procurarFilmeId');

//Exercicio 2a
Route::get('/filmes', 'FilmesController@procurarFilmes');

//Exercicio 1c
Route::get('/filmes/procurar/{nome}', 'FilmesController@procurarFilmeNome');

//Exercicio 2e
Route::get('/filmes/adicionarFilme/{nome}', 'FilmesController@adicionarFilme');

//Exercicio 2f
Route::get('/filmes/listarFilmes', 'FilmesController@listarFilmes');