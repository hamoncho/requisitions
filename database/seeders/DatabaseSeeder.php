<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GeneralBudgetItemSeeder::class,
            BudgetItemSeeder::class,
            InvolvedSeeder::class,
            ObjectiveSeeder::class,
            ActionSeeder::class,
            GoalSeeder::class,
            ProjectSeeder::class,
            IndicatorSeeder::class,
            ProcessSeeder::class,
            UserSeeder::class,
            RequisitionSeeder::class,
            RequisitionItemSeeder::class,
        ]);
    }
}
