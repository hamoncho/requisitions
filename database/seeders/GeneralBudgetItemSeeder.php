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
            'code' => 2000,
            'name' => 'MATERIALES Y SUMINISTROS',
        ]);

        GeneralBudgetItem::create([
            'code' => 2100,
            'name' => 'MATERIALES DE ADMINISTRACION, EMISION DE DOCUMENTOS Y ARTICULOS OFICIALES',
        ]);

        GeneralBudgetItem::create([
            'code' => 2200,
            'name' => 'ALIMENTOS Y UTENSILIOS',
        ]);

        GeneralBudgetItem::create([
            'code' => 2300,
            'name' => 'MATERIAS PRIMAS Y MATERIALES DE PRODUCCION Y COMERCIALIZACION',
        ]);
    }
}
