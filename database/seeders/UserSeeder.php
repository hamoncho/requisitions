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
            'name' => 'Director User',
            'email' => 'director@example.com',
            'password' => Hash::make('password'),
            'role' => 'director',
            'supervisor_id' => null,
        ]);

        // Nivel 2: Manager, reporta al Director
        $manager = User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
            'supervisor_id' => $director->id,
        ]);

        // Nivel 3: Empleado, reporta al Manager
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'supervisor_id' => $manager->id,
        ]);
    }
}