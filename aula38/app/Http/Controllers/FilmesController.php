<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class FilmesController extends Controller
{
    public function formFilmes(){
        return view('filmes');
    }

    public function adicionarFilmes(Request $request){
        $movie = Movie::all();

        //Exercicio 1a, 1b, 1f
        $this->validate($request, [
            'title' => 'required|max:500|unique:movies',
            'rating' => 'required|numeric|max:999,999',
            'awards' => 'required|integer|max:9999999999',
            'length' => 'required|integer|max:9999999999'            
        ]);

        $release_date = $request->input('ano') . "-" .$request->input('mes'). "-". $request->input('dia');

        //$filmes = Movie::create($request->all());
        $filmes = Movie::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $release_date
        ]);
        $sucesso = $filmes->save();

        if($sucesso){
            return view('filmes')->with('sucesso',true);
        }
        else{
            return view('filmes')->with('erro',true)
        }
        
        $filmes->save();

        //return view('filmes')->with('requisicao',$request);
    }
}
