<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//Exercicio 2a
class Movie extends Model
{
    protected $table = 'movies';

    public function getNomeFilme(){
        return $this->title;
    }

}
