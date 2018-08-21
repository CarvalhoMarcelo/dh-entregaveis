<?php

use Illuminate\Database\Seeder;
use App\Actor;
use App\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $atores = Actor::all();
        // var_dump($atores->random(3));
        // exit;
        $movies = factory(Movie::class)->times(3)->create();        

        foreach($movies as $movie){
            $movie->actors()->sync($atores->random(3));
        }

    }
}
