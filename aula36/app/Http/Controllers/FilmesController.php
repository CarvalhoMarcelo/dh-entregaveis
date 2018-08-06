<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Exercicio 1a
class FilmesController extends Controller
{    

    //Exercicio 1b
    public function  procurarFilmeId($id){
        $localiza_id = 0;    
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];

        if($id >= 1 and $id <= 6){
            $retorno = $filmes[$id];
        }else{
            $retorno = 0;
        }

        return view ('filmes')->with('banana',$retorno)
                              ->with('localiza',$localiza_id);    

    }

    //Exercicio 1c
    public function procurarFilmeNome($nome){
        $localiza_id = 1;
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];        

        $achei = 0;            
        foreach($filmes as $filme):            
            if($filme === $nome){
                $achei = 1;            
                $retorno = $filme;
            }
        endforeach;
        if($achei === 1){
            return view ('filmes')->with('banana',$retorno)
                                  ->with('localiza',$localiza_id);
        
        }else{
            return view('filmes')->with('banana','')
                                 ->with('localiza',$localiza_id);
        
        }
    }

    public function procurarFilmes(){
        $localiza_id = 2;
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];       
        
        return view ('filmes')->with('banana',$filmes)
                              ->with('localiza',$localiza_id);

    }

    //Exercicio 2e
    public function adicionarFilme($nome){
        $localiza_id = 3;
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];       

        array_push($filmes, $nome);
        
        return view('filmes')->with('banana',$filmes)
                             ->with('nome',$nome)
                             ->with('localiza',$localiza_id);        

    }

    //Exercicio 2f
    public function listarFilmes(){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];       
        
        return view('todosOsFilmes')->with('banana',$filmes);
    }


}
