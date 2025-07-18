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

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Caja de papel bond t/Carta',
            'amount' => 1,
            'unit' => 'PIEZA',
            'price' => 800,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Caja de folder crema T/C',
            'amount' => 1,
            'unit' => 'PIEZA',
            'price' => 150,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Caja de boligrafo azul kilometrico paper mate azul p.f',
            'amount' => 1,
            'unit' => 'PIEZA',
            'price' => 50,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Calculadora básica de escritorio',
            'amount' => 1,
            'unit' => 'PIEZA',
            'price' => 220,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Engrapadora media tira',
            'amount' => 1,
            'unit' => 'PIEZA',
            'price' => 150,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Cajitas de clip verde No 2',
            'amount' => 3,
            'unit' => 'PIEZAS',
            'price' => 45,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Cajita con 10 lapices Mirado No 2',
            'amount' => 1,
            'unit' => 'PIEZA',
            'price' => 30,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Cubos postit 3x3',
            'amount' => 1,
            'unit' => 'PIEZA',
            'price' => 120,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Caja de folder colgante para escritorio',
            'amount' => 1,
            'unit' => 'PIEZA',
            'price' => 200,
        ]);

        RequisitionItem::create([
            'requisitions_id' => 2,
            'budget_item_id' => 1,
            'name' => 'Indices separadores de 15',
            'amount' => 3,
            'unit' => 'PIEZAS',
            'price' => 200,
        ]);
    }
}
