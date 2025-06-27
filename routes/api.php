<?php

use App\Models\Process;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Obtener proyectos de un proceso
Route::get('/processes/{process}/projects', function (Process $process) {
    return response()->json($process->projects);
});

// Obtener indicadores de un proyecto
Route::get('/projects/{project}/indicators', function (Project $project) {
    return response()->json($project->indicators);
});
