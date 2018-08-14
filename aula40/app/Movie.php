<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';    
    protected $fillable = ['title','awards','rating','length','release_date','genre_id'];

    public function genre(){
        return $this->hasOne(Genre::class,'id','genre_id'); 
    }

    public function actors(){
        return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
    }

    public function getFormatDate($date){
        $release_date = new \Datetime($date); 
        return $release_date->format('d-M-Y');
    }


}
