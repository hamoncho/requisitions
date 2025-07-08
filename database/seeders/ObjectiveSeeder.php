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
            'description'=>'Fortalecer la calidad de  la oferta educativa'
        ]);

        Objective::create([
            'index'=>'2',
            'name'=>'Objectivo 2',
            'description'=>' Ampliar la cobertura con un enfoque de equidad y justicia social'
        ]);

        Objective::create([
            'index'=>'3',
            'name'=>'Objectivo 3',
            'description'=>'Impulsar la formación integral de los estudiantes para contribuir al desarrollo de todas sus potencialidades'
        ]);

        Objective::create([
            'index'=>'4',
            'name'=>'Objectivo 4',
            'description'=>'Robustecer la investigación científica, el desarrollo tecnológico y la innovación a fin de contribuir al desarrollo del país y a mejorar el bienestar de la sociedad.'
        ]);


        Objective::create([
            'index'=>'5',
            'name'=>'Objectivo 5',
            'description'=>'Consolidar la vinculación con los sectores público, social y privado.'
        ]);


        Objective::create([
            'index'=>'6',
            'name'=>'Objectivo 6',
            'description'=>'Modernizar la gestión institucional con transparencia y rendición de cuentas'
        ]);


        DB::table('involved_objective')->insert([
            'involved_id'=>1,
            'objective_id'=>1
        ]);

        DB::table('involved_objective')->insert([
            'involved_id'=>2,
            'objective_id'=>2
        ]);

        DB::table('involved_objective')->insert([
            'involved_id'=>3,
            'objective_id'=>3
        ]);


    }
}
