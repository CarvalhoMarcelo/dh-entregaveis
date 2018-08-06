<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Exercicio 2c
class Actor extends Model
{
    protected $table = 'actors';

    //Exercicio 2d
    public function getNomeCompleto(){        
        return $this->first_name . " " . $this->last_name;
    }

    public function getId(){
        return $this->id;
    }


}
