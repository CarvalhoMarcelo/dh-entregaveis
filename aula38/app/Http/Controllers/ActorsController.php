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
        //return view('add')->with('filmes',$filmes);

        //Lista os atores na mesma view como pede o exercicio
        //O parametro retorno é opcional e ele chegará como true
        //apenas se tiver sido redirecionado pelo metodo ADD,UPDATE,DESTROY E DESTROY1
        //fazendo com que o mesmo form tambem liste os atores
        //os atores.
        return view('add')->with('atores',$actors)
                          ->with('filmes',$filmes)
                          ->with('retorno',$retorno);
    }

    //Exercicio 1d
    public function add(Request $request){        
        $this->validate($request, [
            'first_name' => 'required|max:999',
            'last_name' => 'required|max:999',
            'rating' => 'required|numeric|max:99,9',
        ]);

        //$atores = Actor::create($request->all());
        $atores = Actor::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'rating' => $request->input('rating')
        ]);
        $atores->save();
        // if($atores->save()){
        //     echo "<h1><font color=red>Ator " .$request->input('first_name'). " " .$request->input('last_name'). " incluido com sucesso!!!</font></h1>";            
        // }        

        //Acrescentado o parametro TRUE no redirect to /actors para listar
        //os atores e mostrar que ocorreu a alteracao    
        return redirect('/actors/true'); 
    }

    //Exercicio 2b
    public function edit($id){
        $actors = Actor::find($id);         
        return view('form_edit')->with('atores',$actors);
    }

    //Exercicio 2c
    public function update($id, Request $request){
        $actors = Actor::find($id); 

        $actors->first_name = $request->input('first_name');
        $actors->last_name = $request->input('last_name');
        $actors->rating = $request->input('rating');

        $sucesso = $actors->save();
        
        // if($sucesso){
        //     return view('todosFilmes')->with('sucesso',$sucesso)
        //                               ->with('filmes',$todosFilmes); 
        // }else{
        //     return view('todosFilmes')->with('erro',true)
        //                               ->with('filmes',$todosfilmes);
        // }

        //Acrescentado o parametro TRUE no redirect to /actors para listar
        //os atores e mostrar que ocorreu a alteracao    
        return redirect('/actors/true');
    }

    //Exercicio 2d
    public function destroy($id){
        $actors = Actor::find($id); 
        $actors->delete();        

        //Acrescentado o parametro TRUE no redirect to /actors para listar
        //os atores e mostrar que ocorreu a alteracao    
        return redirect('/actors/true');
    }

    //Exercicio 2e
    public function destroy1(Request $request, $id){
        $actors = Actor::find($id); 
        $actors->delete();        

        //Acrescentado o parametro TRUE no redirect to /actors para listar
        //os atores e mostrar que ocorreu a alteracao    
        return redirect('/actors/true');
    }

}
