<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\GeneralBudgetItemController;
use App\Http\Controllers\BudgetItemController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\IndicatorController;
use App\Http\Controllers\InvolvedController;
use App\Http\Controllers\ObjectiveController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\RequisitionItemController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\UserController;
use App\Models\Requisition;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/summary', function () {
        return view('summary');
    })->name('summary');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/general_budget_item/list', [GeneralBudgetItemController::class, 'list'])->name('general_budget_item.list');
    Route::get('/general_budget_item/{generalBudgetItem}', [GeneralBudgetItemController::class, 'show'])->name('general_budget_item.show');

    Route::get('/budget_item/list', [BudgetItemController::class, 'list'])->name('budget_item.list');
    Route::get('/budget_item/{budgetItem}', [BudgetItemController::class, 'show'])->name('budget_item.show');

    Route::get('/involved/list', [InvolvedController::class, 'list'])->name('involved.list');
    Route::get('/involved/{involved}', [InvolvedController::class, 'show'])->name('involved.show');

    Route::get('/objective/list', [ObjectiveController::class, 'list'])->name('objective.list');
    Route::get('/objective/{objective}', [ObjectiveController::class, 'show'])->name('objective.show');

    Route::get('/action/list', [ActionController::class, 'list'])->name('action.list');
    Route::get('/action/{action}', [ActionController::class, 'show'])->name('action.show');

    Route::get('/project/list', [ProjectController::class, 'list'])->name('project.list');
    Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');

    Route::get('/indicator/list', [IndicatorController::class, 'list'])->name('indicator.list');
    Route::get('/indicator/{indicator}', [IndicatorController::class, 'show'])->name('indicator.show');

    Route::get('/process/list', [ProcessController::class, 'list'])->name('process.list');
    Route::get('/process/{process}', [ProcessController::class, 'show'])->name('process.show');

    Route::get('/requisition/history', function () {
        return view('requisition.history');
    })->name('requisition.history');

    Route::get('/requisition', [RequisitionController::class, 'index'])->name('requisition.index');
    Route::get('/requisition/create', [RequisitionController::class, 'create'])->name('requisition.create');
    Route::post('/requisition', [RequisitionController::class, 'store'])->name('requisition.store');
    Route::get('/requisition/{requisition}', [RequisitionController::class, 'show'])->name('requisition.show');
    Route::get('/requisition/{requisition}/items', [RequisitionController::class, 'addItems'])->name('requisition.addItems');
    Route::post('/requisition/{requisition}/startApprovalProcess', [RequisitionController::class, 'startApprovalProcess'])->name('requisition.start_approval_process');
    Route::delete('/requisition/{requisition}', [RequisitionController::class, 'destroy'])->name('requisition.destroy');

    // Rutas anidadas para Requisition Items
    Route::resource('/requisition/{requisition}/requisition_items', RequisitionItemController::class)->except(['show']);

    //Update type_resource
    Route::put('/requisition/{requisition}/requisition_items/type_resource/{requisition_item}', [RequisitionItemController::class, 'updateTypeResource'])->name('requisition_items.type_resource.update');

    Route::post('/requisition/{requisition}/approve', [RequisitionController::class, 'approve'])->name('requisition.approve');
    Route::post('/requisition/{requisition}/reject', [RequisitionController::class, 'reject'])->name('requisition.reject');

    Route::get('/approvals', [ApprovalController::class, 'index'])->name('approvals.index');

    Route::get('/pdf/requisition/{requisition}', [RequisitionController::class, 'pdf'])->name('pdf.requisition');
});

Route::middleware('auth','admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/general_budget_item', [GeneralBudgetItemController::class, 'index'])->name('general_budget_item.index');
    Route::get('/dashboard/general_budget_item/create', [GeneralBudgetItemController::class, 'create'])->name('general_budget_item.create');
    Route::post('/dashboard/general_budget_item/store', [GeneralBudgetItemController::class, 'store'])->name('general_budget_item.store');
    Route::get('/dashboard/general_budget_item/edit/{generalBudgetItem}', [GeneralBudgetItemController::class, 'edit'])->name('general_budget_item.edit');
    Route::put('/dashboard/general_budget_item/update/{generalBudgetItem}', [GeneralBudgetItemController::class, 'update'])->name('general_budget_item.update');
    Route::delete('/dashboard/general_budget_item/destroy/{generalBudgetItem}', [GeneralBudgetItemController::class, 'destroy'])->name('general_budget_item.destroy');

    Route::get('/dashboard/budget_item', [BudgetItemController::class, 'index'])->name('budget_item.index');
    Route::get('/dashboard/budget_item/create', [BudgetItemController::class, 'create'])->name('budget_item.create');
    Route::post('/dashboard/budget_item/store', [BudgetItemController::class, 'store'])->name('budget_item.store');
    Route::get('/dashboard/budget_item/edit/{budgetItem}', [BudgetItemController::class, 'edit'])->name('budget_item.edit');
    Route::put('/dashboard/budget_item/update/{budgetItem}', [BudgetItemController::class, 'update'])->name('budget_item.update');
    Route::delete('/budget_item/destroy/{budgetItem}', [BudgetItemController::class, 'destroy'])->name('budget_item.destroy');

    Route::get('/dashboard/involved', [InvolvedController::class, 'index'])->name('involved.index');
    Route::get('/dashboard/involved/create', [InvolvedController::class, 'create'])->name('involved.create');
    Route::post('/dashboard/involved/store', [InvolvedController::class, 'store'])->name('involved.store');
    Route::get('/dashboard/involved/edit/{involved}', [InvolvedController::class, 'edit'])->name('involved.edit');
    Route::put('/dashboard/involved/update/{involved}', [InvolvedController::class, 'update'])->name('involved.update');
    Route::delete('/dashboard/involved/destroy/{involved}', [InvolvedController::class, 'destroy'])->name('involved.destroy');

    Route::get('/dashboard/objective', [ObjectiveController::class, 'index'])->name('objective.index');
    Route::get('/dashboard/objective/create', [ObjectiveController::class, 'create'])->name('objective.create');
    Route::post('/dashboard/objective/store', [ObjectiveController::class, 'store'])->name('objective.store');
    Route::get('/dashboard/objective/edit/{objective}', [ObjectiveController::class, 'edit'])->name('objective.edit');
    Route::put('/dashboard/objective/update/{objective}', [ObjectiveController::class, 'update'])->name('objective.update');
    Route::delete('/dashboard/objective/destroy/{objective}', [ObjectiveController::class, 'destroy'])->name('objective.destroy');

    Route::get('/dashboard/action', [ActionController::class, 'index'])->name('action.index');
    Route::get('/dashboard/action/create', [ActionController::class, 'create'])->name('action.create');
    Route::post('/dashboard/action/store', [ActionController::class, 'store'])->name('action.store');
    Route::get('/dashboard/action/edit/{action}', [ActionController::class, 'edit'])->name('action.edit');
    Route::put('/dashboard/action/update/{action}', [ActionController::class, 'update'])->name('action.update');
    Route::delete('/dashboard/action/destroy/{action}', [ActionController::class, 'destroy'])->name('action.destroy');

    Route::get('/dashboard/goal', [GoalController::class, 'index'])->name('goal.index');
    Route::get('/dashboard/goal/create', [GoalController::class, 'create'])->name('goal.create');
    Route::post('/dashboard/goal/store', [GoalController::class, 'store'])->name('goal.store');
    Route::get('/dashboard/goal/edit/{goal}', [GoalController::class, 'edit'])->name('goal.edit');
    Route::put('/dashboard/goal/update/{goal}', [GoalController::class, 'update'])->name('goal.update');
    Route::delete('/dashboard/goal/destroy/{goal}', [GoalController::class, 'destroy'])->name('goal.destroy');

    Route::get('/dashboard/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/dashboard/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/dashboard/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/dashboard/project/edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/dashboard/project/update/{project}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/dashboard/project/destroy/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

    Route::get('/dashboard/indicator', [IndicatorController::class, 'index'])->name('indicator.index');
    Route::get('/dashboard/indicator/create', [IndicatorController::class, 'create'])->name('indicator.create');
    Route::post('/dashboard/indicator/store', [IndicatorController::class, 'store'])->name('indicator.store');
    Route::get('/dashboard/indicator/edit/{indicator}', [IndicatorController::class, 'edit'])->name('indicator.edit');
    Route::put('/dashboard/indicator/update/{indicator}', [IndicatorController::class, 'update'])->name('indicator.update');
    Route::delete('/dashboard/indicator/destroy/{indicator}', [IndicatorController::class, 'destroy'])->name('indicator.destroy');

    Route::get('/dashboard/process', [ProcessController::class, 'index'])->name('process.index');
    Route::get('/dashboard/process/create', [ProcessController::class, 'create'])->name('process.create');
    Route::post('/dashboard/process/store', [ProcessController::class, 'store'])->name('process.store');
    Route::get('/dashboard/process/edit/{process}', [ProcessController::class, 'edit'])->name('process.edit');
    Route::put('/dashboard/process/update/{process}', [ProcessController::class, 'update'])->name('process.update');
    Route::delete('/dashboard/process/destroy/{process}', [ProcessController::class, 'destroy'])->name('process.destroy');

    Route::get('/dashboard/users', [UserController::class, 'index'])->name('users.index');
    Route::put('/dashboard/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/dashboard/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/dashboard/users/{user}/reset-password', [UserController::class, 'resetPassword'])->name('users.reset-password');
    Route::get('/dashboard/requisition/list', [RequisitionController::class, 'list'])->name('requisition.list');
    Route::post('/dashboard/requisition/set-next-folio', [RequisitionController::class, 'setNextFolio'])->name('requisition.setNextFolio');
});

require __DIR__ . '/auth.php';
