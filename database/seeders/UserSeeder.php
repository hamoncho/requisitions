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
        // Crear usuario Administrador
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234qwer'),
            'role' => 'admin',
        ]);

        // Crear usuario Normal
        User::create([
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('1234qwer'),
            'role' => 'user',
        ]);
    }
}