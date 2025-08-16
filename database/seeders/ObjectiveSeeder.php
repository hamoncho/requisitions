<?php

namespace Database\Seeders;

use App\Models\Involved;
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
        // Buscar todos los involved necesarios una sola vez
        $direccionGeneral = Involved::where('name', 'LIKE', 'Direccion General')->firstOrFail();
        $direccionAcademica = Involved::where('name', 'LIKE', 'Direccion Academica')->firstOrFail();
        $subdireccionAcademica = Involved::where('name', 'LIKE', 'Subdireccion Academica')->firstOrFail();
        $subdireccionInvestigacion = Involved::where('name', 'LIKE', 'Subdireccion de Investigacion y Posgrado')->firstOrFail();
        $jefaturasDivision = Involved::where('name', 'LIKE', 'Jefaturas de Division')->firstOrFail();
        $jefaturaDesarrollo = Involved::where('name', 'LIKE', 'Jefatura de Desarrollo Academico')->firstOrFail();
        $jefaturaCiencias = Involved::where('name', 'LIKE', 'Jefatura de Ciencias Basicas')->firstOrFail();
        $subdireccionVinculacion = Involved::where('name', 'LIKE', 'Subdireccion de Vinculacion')->firstOrFail();
        $subdireccionPlaneacion = Involved::where('name', 'LIKE', 'Subdireccion de Planeacion')->firstOrFail();
        $departamentoDifusion = Involved::where('name', 'LIKE', 'Departamento de Difusion')->firstOrFail();
        $jefaturaExtraescolares = Involved::where('name', 'LIKE', 'Jefatura del Departamento de Actividades Extraescolares')->firstOrFail();
        $coordinacionCultural = Involved::where('name', 'LIKE', 'Coordinacion Cultural')->firstOrFail();
        $coordinacionDeportiva = Involved::where('name', 'LIKE', 'Coordinacion Deportiva')->firstOrFail();
        $direccionPlaneacion = Involved::where('name', 'LIKE', 'Direccion De Planeacion y Vinculacion')->firstOrFail();
        $subdireccionServicios = Involved::where('name', 'LIKE', 'Subdireccion de Servicios Administrativos')->firstOrFail();
        $jefaturaPersonal = Involved::where('name', 'LIKE', 'Jefatura del Departamento de Personal')->firstOrFail();
        $jefaturaRecursosMateriales = Involved::where('name', 'LIKE', 'Jefatura del Departamento de Recursos Materiales y Servicios')->firstOrFail();
        $jefaturaComputo = Involved::where('name', 'LIKE', 'Jefatura del Departamento de Centro de Computo')->firstOrFail();
        $jefaturaFinancieros = Involved::where('name', 'LIKE', 'Jefatura del Departamento de Recursos Financieros')->firstOrFail();

        Objective::create([
            'index' => '1',
            'name' => 'Objetivo 1',
            'description' => 'Fortalecer la calidad de  la oferta educativa'
        ]);

        Objective::create([
            'index' => '2',
            'name' => 'Objetivo 2',
            'description' => ' Ampliar la cobertura con un enfoque de equidad y justicia social'
        ]);

        Objective::create([
            'index' => '3',
            'name' => 'Objetivo 3',
            'description' => 'Impulsar la formación integral de los estudiantes para contribuir al desarrollo de todas sus potencialidades'
        ]);

        Objective::create([
            'index' => '4',
            'name' => 'Objetivo 4',
            'description' => 'Robustecer la investigación científica, el desarrollo tecnológico y la innovación a fin de contribuir al desarrollo del país y a mejorar el bienestar de la sociedad.'
        ]);


        Objective::create([
            'index' => '5',
            'name' => 'Objetivo 5',
            'description' => 'Consolidar la vinculación con los sectores público, social y privado.'
        ]);


        Objective::create([
            'index' => '6',
            'name' => 'Objetivo 6',
            'description' => 'Modernizar la gestión institucional con transparencia y rendición de cuentas'
        ]);


        DB::table('involved_objective')->insert([
            [
                'objective_id' => 1,
                'involved_id' => $direccionGeneral->id,
            ],
            [
                'objective_id' => 1,
                'involved_id' => $direccionAcademica->id,
            ],
            [
                'objective_id' => 1,
                'involved_id' => $subdireccionAcademica->id,
            ],
            [
                'objective_id' => 1,
                'involved_id' => $subdireccionInvestigacion->id,
            ],
            [
                'objective_id' => 1,
                'involved_id' => $jefaturasDivision->id,
            ],
            [
                'objective_id' => 1,
                'involved_id' => $jefaturaDesarrollo->id,
            ],
            [
                'objective_id' => 1,
                'involved_id' => $jefaturaCiencias->id,
            ]
        ]);

        DB::table('involved_objective')->insert([
            [
                'objective_id' => 2,
                'involved_id' => $direccionGeneral->id,
            ],
            [
                'objective_id' => 2,
                'involved_id' => $direccionAcademica->id,
            ],
            [
                'objective_id' => 2,
                'involved_id' => $subdireccionAcademica->id,
            ],
            [
                'objective_id' => 2,
                'involved_id' => $subdireccionInvestigacion->id,
            ],
            [
                'objective_id' => 2,
                'involved_id' => $jefaturaDesarrollo->id,
            ],
            [
                'objective_id' => 2,
                'involved_id' => $direccionPlaneacion->id,
            ],
            [
                'objective_id' => 2,
                'involved_id' => $subdireccionVinculacion->id,
            ],
            [
                'objective_id' => 2,
                'involved_id' => $subdireccionPlaneacion->id,
            ],
            [
                'objective_id' => 2,
                'involved_id' => $departamentoDifusion->id,
            ]
        ]);

        DB::table('involved_objective')->insert([
            [
                'objective_id' => 3,
                'involved_id' => $direccionGeneral->id,
            ],
            [
                'objective_id' => 3,
                'involved_id' => $direccionAcademica->id,
            ],
            [
                'objective_id' => 3,
                'involved_id' => $subdireccionAcademica->id,
            ],
            [
                'objective_id' => 3,
                'involved_id' => $jefaturaExtraescolares->id,
            ],
            [
                'objective_id' => 3,
                'involved_id' => $coordinacionCultural->id,
            ],
            [
                'objective_id' => 3,
                'involved_id' => $coordinacionDeportiva->id,
            ]
        ]);

        DB::table('involved_objective')->insert([
            [
                'objective_id' => 4,
                'involved_id' => $direccionGeneral->id,
            ],
            [
                'objective_id' => 4,
                'involved_id' => $direccionAcademica->id,
            ],
            [
                'objective_id' => 4,
                'involved_id' => $subdireccionAcademica->id,
            ],
            [
                'objective_id' => 4,
                'involved_id' => $subdireccionInvestigacion->id,
            ],
            [
                'objective_id' => 4,
                'involved_id' => $jefaturasDivision->id,
            ],
            [
                'objective_id' => 4,
                'involved_id' => $jefaturaDesarrollo->id,
            ],
            [
                'objective_id' => 4,
                'involved_id' => $jefaturaCiencias->id,
            ]
        ]);

        DB::table('involved_objective')->insert([
            [
                'objective_id' => 5,
                'involved_id' => $direccionGeneral->id,
            ],
            [
                'objective_id' => 5,
                'involved_id' => $direccionAcademica->id,
            ],
            [
                'objective_id' => 5,
                'involved_id' => $direccionPlaneacion->id,
            ],
            [
                'objective_id' => 5,
                'involved_id' => $subdireccionVinculacion->id,
            ],
            [
                'objective_id' => 5,
                'involved_id' => $subdireccionInvestigacion->id,
            ],
            [
                'objective_id' => 5,
                'involved_id' => $jefaturasDivision->id,
            ],
            [
                'objective_id' => 5,
                'involved_id' => $jefaturaDesarrollo->id,
            ]
        ]);

        DB::table('involved_objective')->insert([
            [
                'objective_id' => 6,
                'involved_id' => $direccionGeneral->id,
            ],
            [
                'objective_id' => 6,
                'involved_id' => $direccionPlaneacion->id,
            ],
            [
                'objective_id' => 6,
                'involved_id' => $subdireccionServicios->id,
            ],
            [
                'objective_id' => 6,
                'involved_id' => $subdireccionPlaneacion->id,
            ],
            [
                'objective_id' => 6,
                'involved_id' => $jefaturaPersonal->id,
            ],
            [
                'objective_id' => 6,
                'involved_id' => $jefaturaRecursosMateriales->id,
            ],
            [
                'objective_id' => 6,
                'involved_id' => $jefaturaComputo->id,
            ],
            [
                'objective_id' => 6,
                'involved_id' => $jefaturaFinancieros->id,
            ]
        ]);
    }
}
