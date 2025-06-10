<?php

namespace Database\Seeders;

use App\Models\Indicator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Indicator::create([
            'index' => '1.1.1',
            'description' => 'This is a description number 1 for indicator',
            'project_id' => 1
        ]);

        Indicator::create([
            'index' => '1.1.2',
            'description' => 'This is a description number 2 for indicator',
            'project_id' => 2
        ]);

        Indicator::create([
            'index' => '1.1.3',
            'description' => 'This is a description number 3 for indicator',
            'project_id' => 3
        ]);

        Indicator::create([
            'index' => '1.1.4',
            'description' => 'This is a description number 4 for indicator',
            'project_id' => 4
        ]);

        Indicator::create([
            'index' => '1.1.5',
            'description' => 'This is a description number 5 for indicator',
            'project_id' => 5
        ]);
    }
}
