<?php

namespace Database\Seeders;

use App\Models\Museum;
use App\Models\State;
use App\Models\Visitor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //User::truncate();
        Museum::truncate();
        Visitor::truncate();
        State::truncate();

         //User::factory(5)->create();
         $museum = Museum::factory(10)->create();
         $state = State::factory(44)->create();
         Visitor::factory(20)->create();
         
        /* 
         ([
            'museum_id'=>$museum->id,
            'state_id'=>$state->id,
        ]);*/
    }
}
