<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class FilmeController extends Controller
{
    public function  procurarFilmeId($id){
        $localiza_id = 0;    
        $movie = Movie::find($id);
        return view ('filmes')->with('banana',$movie)
                              ->with('localiza',$localiza_id);    

    }

    public function procurarFilmes(){
        $localiza_id = 1;
        $movie = Movie::all();        
        return view ('filmes')->with('banana',$movie)
                              ->with('localiza',$localiza_id);
    }

    public function procurarFilmeNome($nome){
        $localiza_id = 2;
        $achei = 0;      
        //$movie = Movie::where('title', '=', '$nome')->get();
        $movie = Movie::all();        

        foreach($movie as $filme):
            if($filme->getNomeFilme() === $nome){
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

}
