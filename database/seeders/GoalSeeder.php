<?php

namespace Database\Seeders;

use App\Models\Goal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Goal::create([
            'action_id' => 1,
            'year'=>2018,
            'result' => 'The result for this is 1'
        ]);

        Goal::create([
            'action_id' => 1,
            'year'=>2019,
            'result' => 'The result for this is 2'
        ]);


        Goal::create([
            'action_id' => 1,
            'year'=>2020,
            'result' => 'The result for this is 3'
        ]);

        Goal::create([
            'action_id' => 2,
            'year'=>2018,
            'result' => 'The result for this is 1 other'
        ]);

        Goal::create([
            'action_id' => 2,
            'year'=>2019,
            'result' => 'The result for this is 2 i duno'
        ]);

        Goal::create([
            'action_id' => 2,
            'year'=>2020,
            'result' => 'The result for this is 3 XD.'
        ]);

    }
}
