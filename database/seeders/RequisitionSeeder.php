<?php

namespace Database\Seeders;

use App\Models\Process;
use App\Models\Requisition;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequisitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $process101 = Process::where('index', 'PROC101')->first();
        $process103 = Process::where('index', 'PROC103')->first();
        $user = User::where('role', 'user')->first();

        Requisition::create([
            'processes_id' => $process101->id,
            'indicators_id' => $process101->projects->first()->indicators->first()->id,
            'to_be_used' => 'Papeleria básica para las lavores del departamento de Planeación',
            'users_id' => $user->id,
            'folio' => 100
        ]);

        Requisition::create([
            'processes_id' => $process103->id,
            'indicators_id' => $process103->projects->first()->indicators->first()->id,
            'to_be_used' => 'Papeleria básica para las lavores del departamento de Planeación',
            'users_id' => $user->id,
            'folio' => 101
        ]);
    }
}
