<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            InvolvedSeeder::class,
            ObjectiveSeeder::class,
            ActionSeeder::class,
            GoalSeeder::class,
            ProjectSeeder::class,
            IndicatorSeeder::class
        ]);
    }
}
