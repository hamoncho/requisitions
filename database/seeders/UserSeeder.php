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
            'email' => 'director@example.com',
            'password' => Hash::make('password'),
            'role' => 'directive',
            'supervisor_id' => 1,
            'directive_id' => 1,
        ]);

        // Nivel 2: Subdireccion de Servicios Administrativos, reporta al Director
        $subdireccionServiciosAdministrativos = User::create([
            'name' => 'L.C Cuitlahuac Arévalo Vargas',
            'email' => 'subdireccion@example.com',
            'password' => Hash::make('password'),
            'role' => 'Directora de Planeación y Vinculación',
            'supervisor_id' => $director->id,
            'directive_id' => $director->id,
        ]);

        // Nivel 3: Manager, reporta al Director
        $directoraPlaneacionVinculacion = User::create([
            'name' => 'Lic. Ana Patricia Guizar Mendoza',
            'email' => 'planning@example.com',
            'password' => Hash::make('password'),
            'role' => 'planning',
            'supervisor_id' => $subdireccionServiciosAdministrativos->id,
            'directive_id' => $director->id,
        ]);

        // Nivel 4: Manager, reporta al Director
        $supervisor = User::create([
            'name' => 'Kenia Judith Becerra Bautista',
            'email' => 'supervisor@example.com',
            'password' => Hash::make('password'),
            'role' => 'immediate_boss',
            'supervisor_id' => $directoraPlaneacionVinculacion->id,
            'directive_id' => $director->id,
        ]);

        // Nivel 5: Empleado, reporta al Manager
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'supervisor_id' => $supervisor->id,
            'directive_id' => $director->id,
        ]);
    }
}
