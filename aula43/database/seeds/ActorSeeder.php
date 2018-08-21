<?php

use Illuminate\Database\Seeder;
use App\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = factory(Actor::class)->times(50)->create();
        //$directors = Director::all();

    }
}
