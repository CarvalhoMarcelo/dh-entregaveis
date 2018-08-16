<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Actor;

class FilmesController extends Controller
{
    public function formFilmes(){
        $generos = Genre::all();

        // Se a view estiver dentro de uma subpasta
        // chamar pasta.arquivo - Ex. movies.filmes
        return view('filmes')->with('banana',$generos);
    }

    public function adicionarFilmes(Request $request){
        //$movie = Movie::all();       

        $this->validate($request, [
            'title' => 'required|max:500|unique:movies',
            'rating' => 'required|numeric|max:999,999',
            'awards' => 'required|integer|max:9999999999',
            'length' => 'required|integer|max:9999999999',
            'release_date' => 'required'
        ]);

        $release_date = $this->formatDate($request->input('release_date'));
        $genre_id = $request->input('genre_id');

        //$filmes = Movie::create($request->all());
        $filmes = Movie::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $release_date,
            'genre_id' => $genre_id
        ]);
        $sucesso = $filmes->save();
        return redirect('/filmes');
    }

    public function formatDate($date){
        $release_date = new \Datetime($date); 
        return $release_date->format('Y-m-d');
    }

    public function listaFilmes(){

        //$movies = Movie::all();

        //Exercicio 1 - Pagination
        //$movie = $movies->paginate(5);

        // Exercicio 1b - Colecoes
        //$movies = Movie::where('genre_id','=','3')

        // Exercicio 2a - Colecoes
        //$movies = Movie::orderBy('title')->paginate(5);

        //Exercicio 2b - Colecoes
        //$movies = Movie::orderBy('length')->paginate(5);

        //Exercicio 2c - Colecoes        
        //$movies = Movie::all();
        //$movies->shuffle();

        // Exercicio 2d - Colecoes        
        //$movies = Movie::where('length','>','90')->paginate(10);

        // Exercicio 2e - Colecoes        
        $movies = Movie::where('length','>','90')
                         ->orWhere('rating','>','5')
                         ->paginate(10);

        return view('listafilmes')->with('filmes',$movies);
                                  //->with('atores',$actors);     
           

    }

}
