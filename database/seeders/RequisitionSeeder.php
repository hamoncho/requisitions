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
        $process = Process::where('index','PROC101')->first();
        $user = User::where('role','user')->first();
        Requisition::create([
            'processes_id' => $process->projects[0]->id,
            'indicators_id' => $process->projects[0]->indicators[0]->id,
            'users_id' => $user->id,
            'folio' => 100
        ]);
    }
}
