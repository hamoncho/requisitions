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
            'description' => ' Asignaciones destinadas a la adquisición de productos alimenticios y utensilios necesarios para el servicio de alimentación en apoyo de las actividades de los servidores públicos y los requeridos en la prestación de servicios públicos en unidades de salud, educativas y de readaptación social, entre otras. Excluye los gastos por alimentación previstos en los conceptos 3700 Servicios de Traslado y Viáticos y 3800 Servicios Oficiales.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2300,
            'name' => 'MATERIAS PRIMAS Y MATERIALES DE PRODUCCION Y COMERCIALIZACION',
            'description' => ' Asignaciones destinadas a la adquisición de toda clase de materias primas en estado natural, transformadas o semi-transformadas de naturaleza vegetal, animal y mineral que se utilizan en la operación de los entes públicos, así como las destinadas a cubrir el costo de los materiales, suministros y mercancías diversas que los entes adquieren para su comercialización.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2400,
            'name' => 'MATERIALES Y ARTICULOS DE CONSTRUCCION Y DE REPARACION',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y artículos utilizados en la construcción, reconstrucción, ampliación, adaptación, mejora, conservación, reparación y mantenimiento de bienes inmuebles.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2500,
            'name' => 'PRODUCTOS QUIMICOS, FARMACEUTICOS Y DE LABORATORIO',
            'description' => 'Asignaciones destinadas a la adquisición de sustancias, productos químicos y farmacéuticos de aplicación humana o animal; así como toda clase de materiales y suministros médicos y de laboratorio.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2600,
            'name' => 'COMBUSTIBLES, LUBRICANTES Y ADITIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de combustibles, lubricantes y aditivos de todo tipo, necesarios para el funcionamiento de vehículos de transporte terrestres, aéreos, marítimos, lacustres y fluviales; así como de maquinaria y equipo.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2700,
            'name' => 'VESTUARIO, BLANCOS, PRENDAS DE PROTECCION Y ARTICULOS DEPORTIVOS',
            'description' => 'Asignaciones destinadas a la adquisición de vestuario y sus accesorios, blancos, artículos deportivos; así como prendas de protección personal diferentes a las de seguridad.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2800,
            'name' => 'MATERIALES Y SUMINISTROS PARA SEGURIDAD',
            'description' => ' Asignaciones destinadas a la adquisición de materiales, sustancias explosivas y prendas de protección personal necesarias en los programas de seguridad.'
        ]);

        GeneralBudgetItem::create([
            'code' => 2900,
            'name' => 'HERRAMIENTAS, REFACCIONES Y ACCESORIOS MENORES',
            'description' => ' Asignaciones destinadas a la adquisición de toda clase de refacciones, accesorios, herramientas menores y demás bienes de consumo del mismo género, necesarios para la conservación de los bienes muebles e inmuebles.'
        ]);
    }
}
