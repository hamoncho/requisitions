<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supervisor = User::create([
            'name' => 'Supervisor User',
            'position' => 'Subdirector de Planeación',
            'email' => 'supervisor@itsuruapan.edu.mx',
            'password' => Hash::make('password'),
            'role' => 'immediate_boss',
        ]);

        User::create([
            'name' => 'User De Pruebas',
            'position' => 'Empleado',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'supervisor_id' => $supervisor->id,
        ]);

        // Create admin user
        User::create([
            'name' => 'admin',
            'position' => 'Administrador Del Sistema',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'supervisor_id' => $supervisor->id,
        ]);
    }
}
