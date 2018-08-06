<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

class AtorController extends Controller
{

    public function directory(){        
        //$ator = Actor::first()->get();    

        $ator = Actor::all(); //Exercicio 3c

        //$ator = Actor::orderBy('first_name')->get();

        // if($ator){
        //     $atores = $ator;
        // }else{
        //     $atores = "Ator nao encontrado!";
        // }
        
        //Exercicio 3a
        // return view ('atores')->with('atorEncontrado', $atores);                   

        $movie = Movie::all();
        $filmes = array();
        foreach($ator as $umAtor):
            $movie = Movie::find($umAtor->getId());
            if($movie){
                array_push($filmes , "Ator: " .
                            $umAtor->getNomeCompleto() . " - Filme: " .
                            $movie->getNomeFilme());
            }
        endforeach;        
        return view ('atores')->with('filmesDoAtor',$filmes);
    }

    //Exercicio 3f
    public function show($id){
        $ator = Actor::find($id);
        $movie = Movie::find($ator->getId());

        return view ('atores')->with('ator',$ator)
                              ->with('filme',$movie);
    }

    public function dadosAtor($id){
        $ator = Actor::find($id);
        return view('dadosAtor')->with('dadosAtor',$ator);
    }


    //Exercicio 4 - Utilizado novo metodo para não estragar os exercicios anteriores
    // usa /atores1 para o exercicio 4c com form
    public function carregaForm(){
        return view('atores');
    }

    //Exercicio 4c
    public function search(){
        if($_GET){
            if(isset($_GET['nome'])){
                $nome = $_GET['nome'];        
            }
            else{
                $nome = '';
            }            
        }
        else{
            $nome = '';
        }
        if($nome !== ''){
            //$atores = Actor::where('first_name', 'LIKE', '%$nome%');    
            $atores1 = Actor::all();
            $atores = [];

            foreach($atores1 as $ator){
                if(strpos($ator->getNomeCompleto(),$nome)){
                    array_push($atores, $ator);
                }
            }
            return view('atores')->with('nomeAtor',$atores);
        }
        else{
            echo "O campo está em branco";
        }
    }




}
