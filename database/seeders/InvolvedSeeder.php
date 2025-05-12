<?php

namespace Database\Seeders;

use App\Models\Involved;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvolvedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Involved::create([
            'name'=> 'Direcion General',
        ]);

        Involved::create([
            'name'=> 'Direcion Academica',
        ]);


        Involved::create([
            'name'=> 'Direcion Subdirecion',
        ]);
    }
}
