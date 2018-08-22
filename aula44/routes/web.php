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

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard');

//Route::get('/filmes', 'MoviesController@formFilmes')->middleware('manutencao');
Route::get('/filmes', 'MoviesController@formFilmes');
Route::post('/filmes/adicionar', 'MoviesController@adicionarFilmes'); 

Route::get('/users/editar', 'HomeController@formUsuario');
Route::post('/users/editar', 'HomeController@alterUsuario'); 


