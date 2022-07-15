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
         $state = State::factory(20)->create();
         
         Visitor::factory(2)->create(
            [
                'museum_id'=>$museum->get(2)->id,
                'state_id'=>$state->get(5)->id
             ]
            );

        Visitor::factory(1)->create(
            [
                'museum_id'=>$museum->get(4)->id,
                'state_id'=>$state->get(3)->id
             ]
            );
             
        Visitor::factory(2)->create(
            [
                'museum_id'=>$museum->get(9)->id,
                'state_id'=>$state->get(18)->id
              ]
            );

            Visitor::factory(3)->create(
                [
                    'museum_id'=>$museum->get(5)->id,
                    'state_id'=>$state->get(12)->id
                  ]
                );

                Visitor::factory(2)->create(
                    [
                        'museum_id'=>$museum->get(7)->id,
                        'state_id'=>$state->get(8)->id
                      ]
                    );

                    Visitor::factory(1)->create(
                        [
                            'museum_id'=>$museum->get(1)->id,
                            'state_id'=>$state->get(11)->id
                         ]
                        );
    
    }
}
