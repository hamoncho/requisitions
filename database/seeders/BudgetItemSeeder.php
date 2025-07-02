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
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' =>  21201,
            'name' => 'MATERIALES Y UTILES DE IMPRESION Y REPRODUCCION',
        ]);

        BudgetItem::create([
            'general_budget_item_id' => $generalBudgetItem1->id,
            'full_code' =>  21301,
            'name' => 'MATERIAL ESTADISTICO Y GEOGRAFICO',
        ]);
    }
}
