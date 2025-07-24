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
        // Nivel 1: Director
        $director = User::create([
            'name' => 'Mtra. Selene Gómez Barragán',
            'position' => 'Directora General',
            'email' => 'director@example.com',
            'password' => Hash::make('password'),
            'role' => 'directive',
            'supervisor_id' => 1,
        ]);
        // Nivel 5: Empleado, reporta al Manager
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
