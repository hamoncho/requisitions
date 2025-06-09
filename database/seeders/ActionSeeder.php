<?php

namespace Database\Seeders;

use App\Http\Controllers\ActionController;
use App\Models\Action;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Action::create([
            'index' => '1.1',
            'name' => 'name 1.1',
            'formula' => 'formula 1.1',
            'objective_id' => 0
        ]);

        Action::create([
            'index' => '1.2',
            'name' => 'name 1.2',
            'formula' => 'formula 1.2',
            'objective_id' => 0
        ]);

        Action::create([
            'index' => '1.3',
            'name' => 'name 1.3',
            'formula' => 'formula 1.3',
            'objective_id' => 0
        ]);

        Action::create([
            'index' => '2.1',
            'name' => 'name 2.1',
            'formula' => 'formula 2.1',
            'objective_id' => 1
        ]);

        Action::create([
            'index' => '2.2',
            'name' => 'name 2.2',
            'formula' => 'formula 2.2',
            'objective_id' => 1
        ]);

        Action::create([
            'index' => '2.3',
            'name' => 'name 2.3',
            'formula' => 'formula 2.3',
            'objective_id' => 1
        ]);
    }
}
