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

        DB::table('process_project')->insert([
            'process_id' => $proc101->id,
            'project_id' => $project_1_1_3->id
        ]);

        DB::table('process_project')->insert([
            'process_id' => 1,
            'project_id' => 2
        ]);

        DB::table('process_project')->insert([
            'process_id' => 2,
            'project_id' => 1
        ]);

        DB::table('process_project')->insert([
            'process_id' => 2,
            'project_id' => 2
        ]);

        DB::table('process_project')->insert([
            'process_id' => 2,
            'project_id' => 3
        ]);

        DB::table('process_project')->insert([
            'process_id' => 3,
            'project_id' => 1
        ]);
    }
}
