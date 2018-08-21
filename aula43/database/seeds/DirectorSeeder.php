<?php

use Illuminate\Database\Seeder;
use App\Director;
use App\Movie;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directors = factory(Director::class)->times(10)->create();
        //$directors = Director::all();

        foreach($directors as $director){
            factory(Movie::class,5)->create([
                'director_id' => $director->id,
            ]);
        }



    }
}
