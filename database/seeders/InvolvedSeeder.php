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
            'name'=> 'Dirección General',
        ]);

        Involved::create([
            'name'=> 'Dirección Academica',
        ]);

        Involved::create([
            'name'=> 'Subdirección Académica',
        ]);

        Involved::create([
            'name'=> 'Subdirección de Investigación y Posgrado',
        ]);

        Involved::create([
            'name'=> 'Jefaturas de División',
        ]);

        Involved::create([
            'name'=> 'Jefatura de Desarrollo Académico',
        ]);

        Involved::create([
            'name'=> 'Jefatura de Ciencias Básicas',
        ]);

        Involved::create([
            'name'=> 'Dirección De Planeación y Vinculación',
        ]);

        Involved::create([
            'name'=> 'Subdirección de Planeación',
        ]);

        Involved::create([
            'name'=> 'Departamento de Difusión',
        ]);

        Involved::create([
            'name'=> 'Jefatura del Departamento de Actividades Extraescolares',
        ]);

        Involved::create([
            'name'=> 'Coordinación Cultural',
        ]);

        Involved::create([
            'name' => 'Coordinación Deportiva',
        ]);

        Involved::create([
            'name'=> 'Subdirección De Vinculación',
        ]);

        Involved::create([
            'name'=> 'Subdirección De Servicios Administrativos',
        ]);

        Involved::create([
            'name'=> 'Jefatura del Departamento de Recursos Materiales y Servicios',
        ]);

        Involved::create([
            'name'=> 'Jefatura del Departamento de Centro de Cómputo',
        ]);

        Involved::create([
            'name'=> 'Jefatura del Departamento de Recursos Financieros',
        ]);

        Involved::create([
            'name' => 'Jefatura del Departamento de Personal',
        ]);
    }
}
