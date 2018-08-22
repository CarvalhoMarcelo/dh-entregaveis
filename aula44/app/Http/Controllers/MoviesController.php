<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{


    public function formFilmes(){
        $sucesso = false;
        return view('filmes')->with('sucesso',$sucesso);
    }

    public function adicionarFilmes(Request $request){

        $this->validate($request, [
            'title' => 'required|max:500|unique:movies',
            'rating' => 'required|numeric|max:999,999',
            'awards' => 'required|integer|max:9999999999',
            'length' => 'required|integer|max:9999999999',
            'revenue' => 'required|numeric'
        ]);
        
        $filmes = Movie::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'revenue' => $request->input('revenue'),
            'director_id' => $request->input('director_id')
        ]);
        $sucesso = $filmes->save();

        return view('filmes')->with('sucesso',$sucesso);
    }
}
