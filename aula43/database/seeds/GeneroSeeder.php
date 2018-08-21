<?php

use Illuminate\Database\Seeder;
use App\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $genero = factory(Genero::class)->times(50)->create();


        // $generos = Genero::all();
        // $generos->delete();

        // $genero = Genero::create([
        //     'name' => 'Genero 1',
        //     'ranking' => '13'
        // ]);
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create([
        //     'name' => 'Genero 2',
        //     'ranking' => '14'
        // ]);
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create([
        //     'name' => 'Genero 3',
        //     'ranking' => '15'
        // ]);
        // $genero->active = true;
        // $genero->save();


    }
}
