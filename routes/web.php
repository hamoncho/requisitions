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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/home', function(){
        return view('home');
    })->name('home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/general_budget_item', [GeneralBudgetItemController::class, 'index'])->name('general_budget_item.index');
    Route::get('/general_budget_item/create', [GeneralBudgetItemController::class, 'create'])->name('general_budget_item.create');
    Route::post('/general_budget_item/store',[GeneralBudgetItemController::class, 'store'])->name('general_budget_item.store');
    Route::get('/general_budget_item/edit/{generalBudgetItem}', [GeneralBudgetItemController::class, 'edit'])->name('general_budget_item.edit');
    Route::put('/general_budget_item/update/{generalBudgetItem}', [GeneralBudgetItemController::class, 'update'])->name('general_budget_item.update');
    Route::delete('/general_budget_item/destroy/{generalBudgetItem}', [GeneralBudgetItemController::class, 'destroy'])->name('general_budget_item.destroy');
    //Route::get('/general_budget_item/menu', [GeneralBudgetItemController::class, 'menu'])->name('general_budget_item.menu');


    Route::get('/budget_item', [BudgetItemController::class, 'index'])->name('budget_item.index');
    Route::get('/budget_item/create', [BudgetItemController::class, 'create'])->name('budget_item.create');
    Route::post('/budget_item/store',[BudgetItemController::class, 'store'])->name('budget_item.store');
    Route::get('/budget_item/edit/{budgetItem}', [BudgetItemController::class, 'edit'])->name('budget_item.edit');
    Route::put('/budget_item/update/{budgetItem}', [BudgetItemController::class, 'update'])->name('budget_item.update');
    Route::delete('/budget_item/destroy/{budgetItem}', [BudgetItemController::class, 'destroy'])->name('budget_item.destroy');

    Route::get('/involved',[InvolvedController::class, 'index'])->name('involved.index');
    Route::get('/involved/create', [InvolvedController::class, 'create'])->name('involved.create');
    Route::post('/involved/store',[InvolvedController::class, 'store'])->name('involved.store');
    Route::get('/involved/edit/{involved}', [InvolvedController::class, 'edit'])->name('involved.edit');
    Route::put('/involved/update/{involved}', [InvolvedController::class, 'update'])->name('involved.update');
    Route::delete('/involved/destroy/{involved}', [InvolvedController::class, 'destroy'])->name('involved.destroy');

    Route::get('/objective',[ObjectiveController::class, 'index'])->name('objective.index');
    Route::get('/objective/create',[ObjectiveController::class, 'create'])->name('objective.create');
    Route::post('/objective/store', [ObjectiveController::class, 'store'])->name('objective.store');
    Route::get('/objective/edit/{objective}', [ObjectiveController::class, 'edit'])->name('objective.edit');
    Route::put('/objective/update/{objective}', [ObjectiveController::class, 'update'])->name('objective.update');
    Route::delete('/objective/destroy/{objective}', [ObjectiveController::class, 'destroy'])->name('objective.destroy');

    Route::get('/action', [ActionController::class, 'index'])->name('action.index');
    Route::get('/action/create', [ActionController::class,'create'])->name('action.create');
    Route::post('/action/store', [ActionController::class, 'store'])->name('action.store');
    Route::get('/action/edit/{action}', [ActionController::class, 'edit'])->name('action.edit');
    Route::put('/action/update/{action}', [ActionController::class, 'update'])->name('action.update');
    Route::delete('/action/destroy/{action}', [ActionController::class, 'destroy'])->name('action.destroy');

    Route::get('/goal', [GoalController::class, 'index'])->name('goal.index');
    Route::get('/goal/create', [GoalController::class, 'create'])->name('goal.create');
    Route::post('/goal/store', [GoalController::class, 'store'])->name('goal.store');
    Route::get('/goal/edit/{goal}', [GoalController::class, 'edit'])->name('goal.edit');
    Route::put('/goal/update/{goal}', [GoalController::class, 'update'])->name('goal.update');
    Route::delete('/goal/destroy/{goal}', [GoalController::class, 'destroy'])->name('goal.destroy');

    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store',[ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/project/update/{project}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/destroy/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

    Route::get('/indicator', [IndicatorController::class, 'index'])->name('indicator.index');
    Route::get('/indicator/create', [IndicatorController::class, 'create'])->name('indicator.create');
    Route::post('/indicator/store',[IndicatorController::class, 'store'])->name('indicator.store');
    Route::get('/indicator/edit/{indicator}', [IndicatorController::class, 'edit'])->name('indicator.edit');
    Route::put('/indicator/update/{indicator}', [IndicatorController::class, 'update'])->name('indicator.update');
    Route::delete('/indicator/destroy/{indicator}', [IndicatorController::class, 'destroy'])->name('indicator.destroy');

    Route::get('/process', [ProcessController::class, 'index'])->name('process.index');
    Route::get('/process/create', [ProcessController::class, 'create'])->name('process.create');
    Route::post('/process/store', [ProcessController::class, 'store'])->name('process.store');
    Route::get('/process/edit/{process}', [ProcessController::class, 'edit'])->name('process.edit');
    Route::put('/process/update/{process}', [ProcessController::class, 'update'])->name('process.update');
    Route::delete('/process/destroy/{process}', [ProcessController::class, 'destroy'])->name('process.destroy');

    Route::get('/requisition/history', function(){
        return view('requisition.history');
    })->name('requisition.history');

    Route::get('/requisition', [RequisitionController::class, 'index'])->name('requisition.index');
    Route::get('/requisition/create', [RequisitionController::class, 'create'])->name('requisition.create');
    Route::post('/requisition', [RequisitionController::class, 'store'])->name('requisition.store');
    Route::get('/requisition/{requisition}', [RequisitionController::class, 'show'])->name('requisition.show');
    Route::get('/requisition/{requisition}/items', [RequisitionController::class, 'addItems'])->name('requisition.addItems');
    Route::post('/requisition/{requisition}/startApprovalProcess', [RequisitionController::class, 'startApprovalProcess'])->name('requisition.start_approval_process');

    // Rutas anidadas para Requisition Items
    Route::resource('requisition/{requisition}/requisition_items', RequisitionItemController::class)->except(['show']);

    //Update type_resource
    Route::put('/requisition/{requisition}/requisition_items/type_resource/{requisition_item}',[RequisitionItemController::class, 'updateTypeResource'])->name('requisition_items.type_resource.update');

    Route::post('/requisition/{requisition}/approve', [RequisitionController::class, 'approve'])->name('requisition.approve');
    Route::post('/requisition/{requisition}/reject', [RequisitionController::class, 'reject'])->name('requisition.reject');

    Route::get('/approvals', [ApprovalController::class, 'index'])->name('approvals.index');

    Route::get('/pdf/requisition/{requisition}',[RequisitionController::class, 'pdf'])->name('pdf.requisition');
});

require __DIR__.'/auth.php';
