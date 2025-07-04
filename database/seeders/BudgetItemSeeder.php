<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\BudgetItem;
use App\Models\GeneralBudgetItem;

class BudgetItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generalBudgetItem1 = GeneralBudgetItem::where('code', '2100')->first();
        $generalBudgetItem2 = GeneralBudgetItem::where('code', '2200')->first();
        $generalBudgetItem3 = GeneralBudgetItem::where('code', '2300')->first();
        $generalBudgetItem4 = GeneralBudgetItem::where('code', '2400')->first();
        $generalBudgetItem5 = GeneralBudgetItem::where('code', '2500')->first();
        $generalBudgetItem6 = GeneralBudgetItem::where('code', '2600')->first();
        $generalBudgetItem7 = GeneralBudgetItem::where('code', '2700')->first();
        $generalBudgetItem8 = GeneralBudgetItem::where('code', '2800')->first();
        $generalBudgetItem9 = GeneralBudgetItem::where('code', '2900')->first();

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' =>  21101,
            'name' => 'MATERIALES Y UTILES DE OFICINA',
            'description' => 'Asignaciones destinadas a la adquisición de materiales y artículos diversos, propios para el uso de las oficinas, tales como: papelería, formas, libretas, carpetas, y cualquier tipo de papel, vasos y servilletas desechables, limpiatipos, rollos fotográficos; útiles de escritorio como engrapadoras, perforadoras manuales, sacapuntas; artículos de dibujo, correspondencia y archivo; cestos de basura, y otros productos similares. Incluye la adquisición de artículos de envoltura, sacos y valijas, entre otros.',
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' =>  21201,
            'name' => 'MATERIALES Y UTILES DE IMPRESION Y REPRODUCCION',
            'description' => 'Asignaciones destinadas a la adquisición de materiales utilizados en la impresión, reproducción y encuadernación, tales como: fijadores, tintas, pastas, logotipos, y demás materiales y útiles para el mismo fin',
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' =>  21301,
            'name' => 'MATERIAL ESTADISTICO Y GEOGRAFICO',
            'description' => 'Asignaciones destinadas a la adquisición de publicaciones relacionadas con información estadística y geográfica. Se incluye la cartografía y publicaciones, tales como: las relativas a indicadores económicos y sociodemográficos; cuentas nacionales; estudios geográficos y geodésicos; mapas, planos y fotografías aéreas, entre otros',
        ]);
    }
}
