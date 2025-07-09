<?php

namespace Database\Seeders;

use App\Models\Process;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proc101 = Process::create(['index' => 'PROC101']);
        $proc102 = Process::create(['index' => 'PROC102']);
        $proc103 = Process::create(['index' => 'PROC103']);
        $proc201 = Process::create(['index' => 'PROC201']);
        $proc202 = Process::create(['index' => 'PROC202']);
        $proc203 = Process::create(['index' => 'PROC203']);
        $proc204 = Process::create(['index' => 'PROC204']);
        $proc205 = Process::create(['index' => 'PROC205']);
        $proc206 = Process::create(['index' => 'PROC206']);
        $proc207 = Process::create(['index' => 'PROC207']);
        $proc208 = Process::create(['index' => 'PROC208']);
        $proc209 = Process::create(['index' => 'PROC209']);
        $proc210 = Process::create(['index' => 'PROC210']);
        $proc211 = Process::create(['index' => 'PROC211']);
        $proc212 = Process::create(['index' => 'PROC212']);
        $proc213 = Process::create(['index' => 'PROC213']);
        $proc214 = Process::create(['index' => 'PROC214']);
        $proc301 = Process::create(['index' => 'PROC301']);
        $proc302 = Process::create(['index' => 'PROC302']);
        $proc303 = Process::create(['index' => 'PROC303']);

        $project_1_1_3 = Project::where('index', '1.1.3')->first();

        $project_1_2_2 = Project::where('index', '1.2.2')->first();
        $project_1_2_3 = Project::where('index', '1.2.3')->first();
        $project_1_2_4 = Project::where('index', '1.2.4')->first();
        $project_1_2_5 = Project::where('index', '1.2.5')->first();

        $project_1_3_1 = Project::where('index', '1.3.1')->first();
        $project_1_3_2 = Project::where('index', '1.3.2')->first();

        $project_1_4_2 = Project::where('index', '1.4.2')->first();
        $project_1_4_3 = Project::where('index', '1.4.3')->first();

        $project_et_1_1 = Project::where('index', 'ET.1.1')->first();
        $project_et_1_2 = Project::where('index', 'ET.1.2')->first();

        $project_2_2_1 = Project::where('index', '2.2.1')->first();
        $project_2_2_2 = Project::where('index', '2.2.2')->first();
        $project_2_2_3 = Project::where('index', '2.2.3')->first();
        $project_2_2_3 = Project::where('index', '2.2.3')->first();
        $project_2_2_4 = Project::where('index', '2.2.4')->first();
        $project_2_2_5 = Project::where('index', '2.2.5')->first();
        $project_2_2_6 = Project::where('index', '2.2.6')->first();

        $project_2_3_1 = Project::where('index', '2.3.1')->first();

        $project_et_2_1 = Project::where('index', 'ET.2.1')->first();
        $project_et_2_2 = Project::where('index', 'ET.2.2')->first();

        $project_3_1_1 = Project::where('index', '3.1.1')->first();
        $project_3_1_2 = Project::where('index', '3.1.2')->first();

        $project_3_2_2 = Project::where('index', '3.2.2')->first();
        $project_3_2_3 = Project::where('index', '3.2.3')->first();
        $project_3_2_5 = Project::where('index', '3.2.5')->first();

        $project_3_3_1 = Project::where('index', '3.3.1')->first();
        $project_3_3_2 = Project::where('index', '3.3.2')->first();

        $project_et_3_1 = Project::where('index', 'ET.3.1')->first();
        $project_et_3_2 = Project::where('index', 'ET.3.2')->first();

        $project_4_1_1 = Project::where('index', '4.1.1')->first();
        $project_4_1_2 = Project::where('index', '4.1.2')->first();
        $project_4_1_3 = Project::where('index', '4.1.3')->first();
        $project_4_1_4 = Project::where('index', '4.1.4')->first();

        $project_4_2_1 = Project::where('index', '4.2.1')->first();
        $project_4_2_2 = Project::where('index', '4.2.2')->first();
        $project_4_2_3 = Project::where('index', '4.2.3')->first();
        $project_4_2_4 = Project::where('index', '4.2.4')->first();
        $project_4_2_5 = Project::where('index', '4.2.5')->first();

        $project_4_3_1 = Project::where('index', '4.3.1')->first();
        $project_4_3_3 = Project::where('index', '4.3.3')->first();

        $project_et_4_1 = Project::where('index', 'ET.4.1')->first();
        $project_et_4_2 = Project::where('index', 'ET.4.2')->first();

        $project_5_1_3 = Project::where('index', '5.1.3')->first();
        $project_5_1_4 = Project::where('index', '5.1.4')->first();
        $project_5_1_5 = Project::where('index', '5.1.5')->first();
        $project_5_1_6 = Project::where('index', '5.1.6')->first();

        $project_5_2_1 = Project::where('index', '5.2.1')->first();

        $project_5_3_1 = Project::where('index', '5.3.1')->first();
        $project_5_3_2 = Project::where('index', '5.3.2')->first();

        $project_et_5_1 = Project::where('index', 'ET.5.1')->first();
        $project_et_5_2 = Project::where('index', 'ET.5.2')->first();

        $project_6_1_2 = Project::where('index', '6.1.2')->first();

        $project_6_2_3 = Project::where('index', '6.2.3')->first();
        $project_6_2_4 = Project::where('index', '6.2.4')->first();

        $project_6_3_1 = Project::where('index', '6.3.1')->first();

        $project_6_4_1 = Project::where('index', '6.4.1')->first();
        $project_6_4_2 = Project::where('index', '6.4.2')->first();
        $project_6_4_3 = Project::where('index', '6.4.3')->first();

        $project_et_6_1 = Project::where('index', 'ET.6.1')->first();
        $project_et_6_2 = Project::where('index', 'ET.6.2')->first();

        //Process 101
        DB::table('process_project')->insert([
            'process_id' => $proc101->id,
            'project_id' => $project_6_3_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc101->id,
            'project_id' => $project_6_4_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc101->id,
            'project_id' => $project_6_4_3->id
        ]);

        // Process 102
        DB::table('process_project')->insert([
            'process_id' => $proc102->id,
            'project_id' => $project_1_3_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc102->id,
            'project_id' => $project_2_2_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc102->id,
            'project_id' => $project_6_2_3->id
        ]);

        // Process 103
        DB::table('process_project')->insert([
            'process_id' => $proc103->id,
            'project_id' => $project_2_2_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc103->id,
            'project_id' => $project_2_2_6->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc103->id,
            'project_id' => $project_5_1_5->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc103->id,
            'project_id' => $project_6_2_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc103->id,
            'project_id' => $project_6_2_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc103->id,
            'project_id' => $project_6_3_1->id
        ]);

        // Process 201
        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_1_2_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_1_2_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_1_2_5->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_1_3_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_2_2_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_2_2_5->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_2_2_6->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_4_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_4_2_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_4_3_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_5_1_5->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_6_2_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc201->id,
            'project_id' => $project_et_5_1->id
        ]);

        // Process 202
        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_1_2_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_1_2_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_1_4_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_2_2_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_4_1_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_4_1_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_4_2_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_4_2_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_4_2_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc202->id,
            'project_id' => $project_4_2_5->id
        ]);

        //Process 203
        DB::table('process_project')->insert([
            'process_id' => $proc203->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc203->id,
            'project_id' => $project_1_2_4->id
        ]);

        //Process 204
        DB::table('process_project')->insert([
            'process_id' => $proc204->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc204->id,
            'project_id' => $project_1_2_4->id
        ]);

        //Process 205
        DB::table('process_project')->insert([
            'process_id' => $proc205->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc205->id,
            'project_id' => $project_1_2_4->id
        ]);

        //Process 206
        DB::table('process_project')->insert([
            'process_id' => $proc206->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc206->id,
            'project_id' => $project_1_2_4->id
        ]);

        //Process 207
        DB::table('process_project')->insert([
            'process_id' => $proc207->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc207->id,
            'project_id' => $project_1_2_4->id
        ]);

        //Process 208
        DB::table('process_project')->insert([
            'process_id' => $proc208->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc208->id,
            'project_id' => $project_1_2_4->id
        ]);

        //Process 209
        DB::table('process_project')->insert([
            'process_id' => $proc209->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc209->id,
            'project_id' => $project_1_2_4->id
        ]);

        //Process 210
        DB::table('process_project')->insert([
            'process_id' => $proc210->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc210->id,
            'project_id' => $project_1_2_4->id
        ]);

        //Process 211
        DB::table('process_project')->insert([
            'process_id' => $proc211->id,
            'project_id' => $project_2_2_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc211->id,
            'project_id' => $project_2_3_1->id
        ]);

        // Process 212
        DB::table('process_project')->insert([
            'process_id' => $proc212->id,
            'project_id' => $project_1_2_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc212->id,
            'project_id' => $project_1_4_3->id
        ]);

        // Process 213
        DB::table('process_project')->insert([
            'process_id' => $proc213->id,
            'project_id' => $project_4_1_4->id
        ]);

        // Process 214
        DB::table('process_project')->insert([
            'process_id' => $proc214->id,
            'project_id' => $project_1_2_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc214->id,
            'project_id' => $project_3_1_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc214->id,
            'project_id' => $project_3_1_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc214->id,
            'project_id' => $project_3_2_3->id
        ]);

        // Process 301
        DB::table('process_project')->insert([
            'process_id' => $proc301->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc301->id,
            'project_id' => $project_2_2_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc301->id,
            'project_id' => $project_2_2_4->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc301->id,
            'project_id' => $project_2_2_6->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc301->id,
            'project_id' => $project_6_1_2->id
        ]);
        /*
        * Dato no precente en el archivo excel
        * DB::table('process_project')->insert([
        *     'process_id' => $proc301->id,
        *     'project_id' => $project_6_1_3->id
        * ]);
        */

        // Process 302
        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_3_3_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_4_2_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_5_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_5_1_5->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_5_1_6->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_5_2_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_5_3_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_5_3_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_et_2_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc302->id,
            'project_id' => $project_et_5_2->id
        ]);

        //Process 303
        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_3_3_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_6_2_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_6_4_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_et_1_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_et_1_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_et_3_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_et_3_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_et_4_2->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_et_6_1->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => $proc303->id,
            'project_id' => $project_et_6_2->id
        ]);
    }
}
