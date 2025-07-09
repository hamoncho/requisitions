<?php

namespace Database\Seeders;

use App\Models\RequisitionItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequisitionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RequisitionItem::create([
            'requisitions_id' => 1,
            'budget_item_id' => 1,
            'name' => 'MARCADORES PARA PINTARRON MAGISTRAL CON 4 PIEZAS C/U',
            'amount' => 15,
            'unit' => 'CAJAS',
            'price' => 1548.60,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 1,
            'budget_item_id' => 1,
            'name' => 'CINTA MASKING DE 1"',
            'amount' => 2,
            'unit' => 'PIEZAS',
            'price' => 39,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 1,
            'budget_item_id' => 1,
            'name' => 'PAPEL BOND FACIA PREMIUM  C/5000 HOJAS',
            'amount' => 2,
            'unit' => 'CAJA',
            'price' => 1863.28,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 1,
            'budget_item_id' => 1,
            'name' => 'HOJAS FACIA DE COLOR NEON  AZUL C/25',
            'amount' => 1,
            'unit' => 'PAQUETE',
            'price' => 104.30,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 1,
            'budget_item_id' => 1,
            'name' => 'HOJAS FACIA DE COLOR NEON  AZUL CIELO C/100',
            'amount' => 1,
            'unit' => 'PAQUETE',
            'price' => 209.30,
        ]);
    }
}
