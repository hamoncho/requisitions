<?php

namespace Database\Seeders;

use App\Models\Indicator;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_1_1_3 = Project::where('index', '1.1.3')->first();

        $project_1_2_2 = Project::where('index', '1.2.2')->first();
        $project_1_2_3 = Project::where('index', '1.2.3')->first();
        $project_1_2_4 = Project::where('index', '1.2.4')->first();
        $project_1_2_5 = Project::where('index', '1.2.5')->first();

        $project_1_3_1 = Project::where('index', '1.3.1')->first();
        $project_1_3_2 = Project::where('index', '1.3.2')->first();

        $project_1_4_2 = Project::where('index', '1.4.2')->first();
        $project_1_4_3 = Project::where('index', '1.4.3')->first();

        $project_et_1_1 = Project::where('index', 'ET.1.1')->first();
        $project_et_1_2 = Project::where('index', 'ET.1.2')->first();

        $project_2_2_1 = Project::where('index', '2.2.1')->first();
        $project_2_2_2 = Project::where('index', '2.2.2')->first();
        $project_2_2_3 = Project::where('index', '2.2.3')->first();
        $project_2_2_3 = Project::where('index', '2.2.3')->first();
        $project_2_2_4 = Project::where('index', '2.2.4')->first();
        $project_2_2_5 = Project::where('index', '2.2.5')->first();
        $project_2_2_6 = Project::where('index', '2.2.6')->first();

        $project_2_3_1 = Project::where('index', '2.3.1')->first();

        $project_et_2_1 = Project::where('index', 'ET.2.1')->first();

        $project_3_1_1 = Project::where('index', '3.1.1')->first();
        $project_3_1_2 = Project::where('index', '3.1.2')->first();

        $project_3_2_2 = Project::where('index', '3.2.2')->first();
        $project_3_2_3 = Project::where('index', '3.2.3')->first();
        $project_3_2_5 = Project::where('index', '3.2.5')->first();

        $project_3_3_1 = Project::where('index', '3.3.1')->first();
        $project_3_3_2 = Project::where('index', '3.3.2')->first();

        $project_et_3_1 = Project::where('index', 'ET.3.1')->first();
        $project_et_3_2 = Project::where('index', 'ET.3.2')->first();

        $project_4_1_1 = Project::where('index', '4.1.1')->first();
        $project_4_1_2 = Project::where('index', '4.1.2')->first();
        $project_4_1_3 = Project::where('index', '4.1.3')->first();
        $project_4_1_4 = Project::where('index', '4.1.4')->first();

        $project_4_2_1 = Project::where('index', '4.2.1')->first();
        $project_4_2_2 = Project::where('index', '4.2.2')->first();
        $project_4_2_3 = Project::where('index', '4.2.3')->first();
        $project_4_2_4 = Project::where('index', '4.2.4')->first();
        $project_4_2_5 = Project::where('index', '4.2.5')->first();

        $project_4_3_1 = Project::where('index', '4.3.1')->first();
        $project_4_3_3 = Project::where('index', '4.3.3')->first();

        $project_et_4_1 = Project::where('index', 'ET.4.1')->first();
        $project_et_4_2 = Project::where('index', 'ET.4.2')->first();

        $project_5_1_3 = Project::where('index', '5.1.3')->first();
        $project_5_1_4 = Project::where('index', '5.1.4')->first();
        $project_5_1_5 = Project::where('index', '5.1.5')->first();
        $project_5_1_6 = Project::where('index', '5.1.6')->first();

        $project_5_2_1 = Project::where('index', '5.2.1')->first();

        $project_5_3_1 = Project::where('index', '5.3.1')->first();
        $project_5_3_2 = Project::where('index', '5.3.2')->first();

        $project_et_5_1 = Project::where('index', 'ET.5.1')->first();
        $project_et_5_2 = Project::where('index', 'ET.5.2')->first();

        $project_6_1_2 = Project::where('index', '6.1.2')->first();

        $project_6_2_3 = Project::where('index', '6.2.3')->first();
        $project_6_2_4 = Project::where('index', '6.2.4')->first();

        $project_6_3_1 = Project::where('index', '6.3.1')->firstOrFail();

        $project_6_4_1 = Project::where('index', '6.4.1')->first();
        $project_6_4_2 = Project::where('index', '6.4.2')->firstOrFail();
        $project_6_4_3 = Project::where('index', '6.4.3')->firstOrFail();

        $project_et_6_1 = Project::where('index', 'ET.6.1')->first();
        $project_et_6_2 = Project::where('index', 'ET.6.2')->first();

        Indicator::create([
            'index' => '6.3.1.1',
            'description' => 'Incremento del presupuesto del TecNM gestionado',
            'project_id' => $project_6_3_1->id,
        ]);

        Indicator::create([
            'index' => '6.4.3.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros con informe de rendición de cuentas presentado',
            'project_id' => $project_6_4_3->id,
        ]);

        Indicator::create([
            'index' => '6.4.2.1',
            'description' => 'Porcentaje de institutos tecnológicos y centros con programa de equidad, austeridad, eficiencia y racionalidad en el uso de los recursos implementados',
            'project_id' => $project_6_4_2->id,
        ]);


    }
}
