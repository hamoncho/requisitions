<?php

namespace Database\Seeders;

use App\Models\Objective;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Objective::create([
            'index'=>'1',
            'name'=>'Objectivo 1',
            'description'=>'Descripcion del objectivo'
        ]);

        Objective::create([
            'index'=>'2',
            'name'=>'Objectivo 2',
            'description'=>'Descripcion del objectivo'
        ]);

        Objective::create([
            'index'=>'3',
            'name'=>'Objectivo 3',
            'description'=>'Descripcion del objectivo'
        ]);

        DB::table('involved_objective')->insert([
            'involved_id'=>0,
            'objective_id'=>0
        ]);

        DB::table('involved_objective')->insert([
            'involved_id'=>1,
            'objective_id'=>1
        ]);

    }
}
