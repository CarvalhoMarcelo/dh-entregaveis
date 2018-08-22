<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';    
    protected $fillable = ['title','awards','rating','length', 'revenue', 'director_id'];

}
