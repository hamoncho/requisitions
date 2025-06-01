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
            'index'=> '1.1',
            'name'=> 'name 1',
            'formula'=> 'formula 1',
            'objective_id'=>2
        ]);
    }
}
