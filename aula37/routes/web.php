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

//Exercicio 3a
Route::get('/atores', 'AtorController@directory');

//Exercicio 3e
Route::get('/ator/{id}', 'AtorController@show');
Route::get('/dadosAtor/{id}', 'AtorController@dadosAtor');

//Exercicio 4 - Utilizado nova rota para não estragar o exercicio da rota /atores
Route::get('/atores1', 'AtorController@carregaForm');

//Exercicio 4b
Route::get('/atores/procurar', 'AtorController@search');



//Exercicio 5
Route::get('/filme/{id}', 'FilmeController@procurarFilmeId');
Route::get('/filmes', 'FilmeController@procurarFilmes');
Route::get('/filmes/procurar/{nome}', 'FilmeController@procurarFilmeNome');

