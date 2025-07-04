<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\GeneralBudgetItem;

class GeneralBudgetItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        GeneralBudgetItem::create([
            'code' => 2100,
            'name' => 'MATERIALES DE ADMINISTRACION, EMISION DE DOCUMENTOS Y ARTICULOS OFICIALES',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2200,
            'name' => 'ALIMENTOS Y UTENSILIOS',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2300,
            'name' => 'MATERIAS PRIMAS Y MATERIALES DE PRODUCCION Y COMERCIALIZACION',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2400,
            'name' => 'MATERIALES Y ARTICULOS DE CONSTRUCCION Y DE REPARACION',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2500,
            'name' => 'PRODUCTOS QUIMICOS, FARMACEUTICOS Y DE LABORATORIO',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2600,
            'name' => 'COMBUSTIBLES, LUBRICANTES Y ADITIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2700,
            'name' => 'VESTUARIO, BLANCOS, PRENDAS DE PROTECCION Y ARTICULOS DEPORTIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2800,
            'name' => 'MATERIALES Y SUMINISTROS PARA SEGURIDAD',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2900,
            'name' => 'HERRAMIENTAS, REFACCIONES Y ACCESORIOS MENORES',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y útiles de oficina, limpieza, impresión y reproducción, para el procesamiento en equipos y bienes informáticos; materiales estadísticos, geográficos, de apoyo informativo y didáctico para centros de enseñanza e investigación; materiales requeridos para el registro e identificación en trámites oficiales y servicios a la población.'
        ]);
    }
}
