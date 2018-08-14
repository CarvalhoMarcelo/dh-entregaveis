<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['id','name','ranking','active'];

    public function movies(){
        return $this->hasMany(Movie::class, 'genre_id', 'id');        
    }

    public function getIsActive(){
        if($this->active == 1){
            return "Sim";
        }
        return "Nao";
    }

}
