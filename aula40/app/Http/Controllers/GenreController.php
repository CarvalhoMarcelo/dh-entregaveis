<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function show($id){

        $genre = Genre::find($id);
        //$movies = $genre->movies;

        // var_dump($genre->active);
        // var_dump($genre->movies[0]['title']);
        // exit;

        return view('genre')->with('banana',$genre);

    }
}
