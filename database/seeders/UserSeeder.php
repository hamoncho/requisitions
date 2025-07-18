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

        // Nivel 2: Subdireccion de Servicios Administrativos, reporta al Director
        $subdireccionServiciosAdministrativos = User::create([
            'name' => 'C.P. Samuel Solís Castro',
            'position' => 'Subdirector de Servicios Administrativos',
            'email' => 'subdireccion@example.com',
            'password' => Hash::make('password'),
            'role' => 'subdirectorate',
            'supervisor_id' => $director->id,
        ]);

        // Nivel 3: Manager, reporta al Director
        $directoraPlaneacionVinculacion = User::create([
            'name' => 'Lic. Norma Isela Arreola Cisneros',
            'position' => 'Directora de Planeación y Vinculación',
            'email' => 'planning@example.com',
            'password' => Hash::make('password'),
            'role' => 'planning',
            'supervisor_id' => $subdireccionServiciosAdministrativos->id,
        ]);

        // Nivel 4: Manager, reporta al Director
        $supervisor = User::create([
            'name' => 'Hugo Eric Mier López',
            'position' => 'Subdirector de Planeación',
            'email' => 'supervisor@example.com',
            'password' => Hash::make('password'),
            'role' => 'immediate_boss',
            'supervisor_id' => $directoraPlaneacionVinculacion->id,
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
