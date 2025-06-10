<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'index' => '1.1.1.1',
            'description'=>'this is a description for project 1',
            'action_id'=> 1
        ]);

        Project::create([
            'index' => '1.1.1.2',
            'description'=>'this is a description for project 2',
            'action_id'=> 1
        ]);

        Project::create([
            'index' => '1.1.1.3',
            'description'=>'this is a description for project 3',
            'action_id'=> 1
        ]);

        Project::create([
            'index' => '1.1.1.4',
            'description'=>'this is a description for project 4',
            'action_id'=> 2
        ]);

        Project::create([
            'index' => '1.1.1.5',
            'description'=>'this is a description for project 5',
            'action_id'=> 2
        ]);

    }
}
