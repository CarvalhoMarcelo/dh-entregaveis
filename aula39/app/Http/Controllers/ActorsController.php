<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

class ActorsController extends Controller
{
    public function formAtores($retorno=false){                        
        $filmes = Movie::all(); 
        $actors = Actor::all();

        $sql = Actor::leftJoin('movies','actors.favorite_movie_id','=','movies.id')
                                  ->select('movies.id','movies.title','actors.first_name','actors.last_name','actors.id','actors.favorite_movie_id')
                                  ->orderBy('actors.first_name')
                                  ->get();

        //Lista os atores na mesma view como pede o exercicio
        //O parametro retorno é opcional e ele chegará como true
        //apenas se tiver sido redirecionado pelo metodo ADD,UPDATE,DESTROY E DESTROY1
        //fazendo com que o mesmo form tambem liste os atores
        //os atores.
        return view('add')->with('atores',$actors)
                          ->with('filmes',$filmes)
                          ->with('sql',$sql)
                          ->with('retorno',$retorno);
    }

    public function add(Request $request){        
        $this->validate($request, [
            'first_name' => 'required|max:999',
            'last_name' => 'required|max:999',
            'rating' => 'required|numeric|max:99,9',
        ]);
     
        echo $request->input('first_name');
        echo "<br>";
        echo $request->input('favorite_movie_id');

        $atores = Actor::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'rating' => $request->input('rating'),
            'favorite_movie_id' => $request->input('favorite_movie_id')
        ]);
        $atores->save();

        //Acrescentado o parametro TRUE no redirect to /actors para listar
        //os atores e mostrar que ocorreu a alteracao    
        return redirect('/actors/true'); 
    }

    public function edit($id){
        $actors = Actor::find($id);         
        $filmes = Movie::all();

        $sql = Actor::leftJoin('movies','actors.favorite_movie_id','=','movies.id')                               
                      ->where('actors.id','=',$id)
                      ->select('movies.id','movies.title','actors.first_name','actors.last_name','actors.id','actors.favorite_movie_id')                                                              
                      ->orderBy('actors.first_name')
                      ->get();

        // var_dump($sql);
        // exit;

        return view('form_edit')->with('atores',$actors)
                                ->with('filmes',$filmes)
                                ->with('sql',$sql);
    }

    public function update($id, Request $request){
        $actors = Actor::find($id); 

        $actors->first_name = $request->input('first_name');
        $actors->last_name = $request->input('last_name');
        $actors->rating = $request->input('rating');
        $actors->favorite_movie_id = $request->input('favorite_movie_id');

        $sucesso = $actors->save();        

        return redirect('/actors/true');
    }

    public function destroy($id){
        $actors = Actor::find($id); 
        $actors->delete();        

        //Acrescentado o parametro TRUE no redirect to /actors para listar
        //os atores e mostrar que ocorreu a alteracao    
        return redirect('/actors/true');
    }

    public function destroy1(Request $request, $id){
        $actors = Actor::find($id); 
        $actors->delete();        

        //Acrescentado o parametro TRUE no redirect to /actors para listar
        //os atores e mostrar que ocorreu a alteracao    
        return redirect('/actors/true');
    }

}
