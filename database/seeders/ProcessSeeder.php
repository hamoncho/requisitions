<?php

namespace Database\Seeders;

use App\Models\Process;
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
        Process::create([
            'index' => 'PRC1'
        ]);

        Process::create([
            'index' => 'PRC2'
        ]);

        Process::create([
            'index' => 'PRC3'
        ]);

        Process::create([
            'index' => 'PRC4'
        ]);

        DB::table('process_project')->insert([
            'process_id' => 1,
            'project_id' => 1
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
