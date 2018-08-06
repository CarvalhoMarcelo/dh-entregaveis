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

//Exercicio 2a
Route::get('/meuPrimeiroCaminho', function () {
    return "<h1><font color=red>Criei meu primeiro caminho em Laravel</h1></font>";
});

//Exercicio 2b
Route::get('/resultado1/{numero}', function($numero) {
    if($numero%2 === 0){
        return "<h1>O numero <font color=red>" .$numero. "</font> é um número par</h1>";
    }
    else{
        return "<h1>O numero <font color=red>" .$numero. "</font> é um número ímpar</h1>";
    }
});

//Exercicio 2c
Route::get('/resultado2/{numero_1}/{numero_2?}', function($numero_1, $numero_2 = null) {
    if($numero_2 != null){
        return 
        "<h1>Foram inseridos 2 numeros!<br>
         O resultado da multiplicação de <font color=blue>" .$numero_1. " por " .$numero_2. 
         "</font> é <font color=red>" .($numero_1 * $numero_2). "</font></h1>";
    }
    else{
        if($numero_1 % 2 === 0){            
            return "<h1>Voce inseriu apenas o número <font color=red>" .$numero_1. "</font><br>
                   Esse é um número PAR !!!";
        }
        else{
            return "<h1>Voce inseriu apenas o número <font color=red>" .$numero_1. "</font><br>
                   Esse é um número IMPAR !!!";
        }        
    }   
});
