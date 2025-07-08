<?php

namespace Database\Seeders;

use App\Models\Action;
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
        $action_1_1 = Action::where('index', '1.1')->first();
        $action_1_2 = Action::where('index', '1.2')->first();
        $action_1_3 = Action::where('index', '1.3')->first();
        $action_1_4 = Action::where('index', '1.4')->first();

        $action_2_2 = Action::where('index', '2.2')->first();
        $action_2_3 = Action::where('index', '2.3')->first();
        $action_et_2 = Action::where('index', 'ET.2')->first();

        $action_3_1 = Action::where('index', '3.1')->first();
        $action_3_2 = Action::where('index', '3.2')->first();
        $action_3_3 = Action::where('index', '3.3')->first();

        $action_4_1 = Action::where('index', '4.1')->first();
        $action_4_2 = Action::where('index', '4.2')->first();
        $action_4_3 = Action::where('index', '4.3')->first();

        $action_5_1 = Action::where('index', '5.1')->first();
        $action_5_2 = Action::where('index', '5.2')->first();
        $action_5_3 = Action::where('index', '5.3')->first();
        $action_et_5 = Action::where('index', 'ET.5')->first();

        $action_6_1 = Action::where('index', '6.1')->first();
        $action_6_2 = Action::where('index', '6.2')->first();

        //for action_1_1
        Goal::create([
            'action_id' => $action_1_1->id,
            'year' => 2016,
            'result' => '68%'
        ]);

        Goal::create([
            'action_id' => $action_1_1->id,
            'year' => 2017,
            'result' => '70%'
        ]);

        Goal::create([
            'action_id' => $action_1_1->id,
            'year' => 2018,
            'result' => '72%'
        ]);

        //for action_1_2
        Goal::create([
            'action_id' => $action_1_2->id,
            'year' => 2016,
            'result' => '32%'
        ]);

        Goal::create([
            'action_id' => $action_1_2->id,
            'year' => 2017,
            'result' => '34%'
        ]);

        Goal::create([
            'action_id' => $action_1_2->id,
            'year' => 2018,
            'result' => '36%'
        ]);

        //for action_1_3
        Goal::create([
            'action_id' => $action_1_3->id,
            'year' => 2016,
            'result' => '12%'
        ]);

        Goal::create([
            'action_id' => $action_1_3->id,
            'year' => 2017,
            'result' => '18%'
        ]);

        Goal::create([
            'action_id' => $action_1_3->id,
            'year' => 2018,
            'result' => '24%'
        ]);

        //for action_1_4
        Goal::create([
            'action_id' => $action_1_4->id,
            'year' => 2016,
            'result' => '42%'
        ]);

        Goal::create([
            'action_id' => $action_1_4->id,
            'year' => 2017,
            'result' => '44%'
        ]);

        Goal::create([
            'action_id' => $action_1_4->id,
            'year' => 2018,
            'result' => '46%'
        ]);

        //for action_2_2
        Goal::create([
            'action_id' => $action_2_2->id,
            'year' => 2016,
            'result' => '2100'
        ]);

        Goal::create([
            'action_id' => $action_2_2->id,
            'year' => 2017,
            'result' => '2200'
        ]);

        Goal::create([
            'action_id' => $action_2_2->id,
            'year' => 2018,
            'result' => '2300'
        ]);

        //for action_2_3
        Goal::create([
            'action_id' => $action_2_3->id,
            'year' => 2016,
            'result' => '10'
        ]);

        Goal::create([
            'action_id' => $action_2_3->id,
            'year' => 2017,
            'result' => '15'
        ]);

        Goal::create([
            'action_id' => $action_2_3->id,
            'year' => 2018,
            'result' => '20'
        ]);

        //for action_et_2
        Goal::create([
            'action_id' => $action_et_2->id,
            'year' => 2016,
            'result' => '60'
        ]);

        Goal::create([
            'action_id' => $action_et_2->id,
            'year' => 2017,
            'result' => '80'
        ]);

        Goal::create([
            'action_id' => $action_et_2->id,
            'year' => 2018,
            'result' => '100'
        ]);

        //for action_3_1
        Goal::create([
            'action_id' => $action_3_1->id,
            'year' => 2016,
            'result' => '26%'
        ]);

        Goal::create([
            'action_id' => $action_3_1->id,
            'year' => 2017,
            'result' => '28%'
        ]);

        Goal::create([
            'action_id' => $action_3_1->id,
            'year' => 2018,
            'result' => '30%'
        ]);

        //for action_3_2
        Goal::create([
            'action_id' => $action_3_2->id,
            'year' => 2016,
            'result' => '26%'
        ]);

        Goal::create([
            'action_id' => $action_3_2->id,
            'year' => 2017,
            'result' => '28%'
        ]);

        Goal::create([
            'action_id' => $action_3_2->id,
            'year' => 2018,
            'result' => '30%'
        ]);

        //for action_3_3
        Goal::create([
            'action_id' => $action_3_3->id,
            'year' => 2016,
            'result' => '46%'
        ]);

        Goal::create([
            'action_id' => $action_3_3->id,
            'year' => 2017,
            'result' => '48%'
        ]);

        Goal::create([
            'action_id' => $action_3_3->id,
            'year' => 2018,
            'result' => '46%'
        ]);

        //for action_4_1
        Goal::create([
            'action_id' => $action_4_1->id,
            'year' => 2016,
            'result' => '0'
        ]);

        Goal::create([
            'action_id' => $action_4_1->id,
            'year' => 2017,
            'result' => '0'
        ]);

        Goal::create([
            'action_id' => $action_4_1->id,
            'year' => 2018,
            'result' => '1'
        ]);

        //for action_4_2
        Goal::create([
            'action_id' => $action_4_2->id,
            'year' => 2016,
            'result' => '4'
        ]);

        Goal::create([
            'action_id' => $action_4_2->id,
            'year' => 2017,
            'result' => '4'
        ]);

        Goal::create([
            'action_id' => $action_4_2->id,
            'year' => 2018,
            'result' => '4'
        ]);

        //for action_4_3
        Goal::create([
            'action_id' => $action_4_3->id,
            'year' => 2016,
            'result' => '8'
        ]);

        Goal::create([
            'action_id' => $action_4_3->id,
            'year' => 2017,
            'result' => '8'
        ]);

        Goal::create([
            'action_id' => $action_4_3->id,
            'year' => 2018,
            'result' => '8'
        ]);

        //for action_5_1
        Goal::create([
            'action_id' => $action_5_1->id,
            'year' => 2016,
            'result' => '4'
        ]);

        Goal::create([
            'action_id' => $action_5_1->id,
            'year' => 2017,
            'result' => '4'
        ]);

        Goal::create([
            'action_id' => $action_5_1->id,
            'year' => 2018,
            'result' => '4'
        ]);

        //for action_5_2
        Goal::create([
            'action_id' => $action_5_2->id,
            'year' => 2016,
            'result' => '20%'
        ]);

        Goal::create([
            'action_id' => $action_5_2->id,
            'year' => 2017,
            'result' => '25%'
        ]);

        Goal::create([
            'action_id' => $action_5_2->id,
            'year' => 2018,
            'result' => '30%'
        ]);

        //for action_5_3
        Goal::create([
            'action_id' => $action_5_3->id,
            'year' => 2016,
            'result' => '2'
        ]);

        Goal::create([
            'action_id' => $action_5_3->id,
            'year' => 2017,
            'result' => '2'
        ]);

        Goal::create([
            'action_id' => $action_5_3->id,
            'year' => 2018,
            'result' => '2'
        ]);

        //for action_et_5
        Goal::create([
            'action_id' => $action_et_5->id,
            'year' => 2016,
            'result' => '4'
        ]);

        Goal::create([
            'action_id' => $action_et_5->id,
            'year' => 2017,
            'result' => '4'
        ]);

        Goal::create([
            'action_id' => $action_et_5->id,
            'year' => 2018,
            'result' => '4'
        ]);

        //for action_6_1
        Goal::create([
            'action_id' => $action_6_1->id,
            'year' => 2016,
            'result' => '27 _ 41'
        ]);

        Goal::create([
            'action_id' => $action_6_1->id,
            'year' => 2017,
            'result' => '27 _ 41'
        ]);

        Goal::create([
            'action_id' => $action_6_1->id,
            'year' => 2018,
            'result' => '27 _ 41'
        ]);

        //for action_6_2
        Goal::create([
            'action_id' => $action_6_2->id,
            'year' => 2016,
            'result' => 'SGC, SGA, MEG'
        ]);

        Goal::create([
            'action_id' => $action_6_2->id,
            'year' => 2017,
            'result' => 'SGC, SGA, MEG'
        ]);

        Goal::create([
            'action_id' => $action_6_2->id,
            'year' => 2018,
            'result' => 'SGC, SGA, MEG'
        ]);
    }
}
