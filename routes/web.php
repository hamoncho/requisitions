<?php

use App\Http\Controllers\GeneralBudgetItemController;
use App\Http\Controllers\BudgetItemController;
use App\Http\Controllers\ProfileController;
use App\Models\GeneralBudgetItem;
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
    Route::get('/budget_item/edit/{generalBudgetItem}', [BudgetItemController::class, 'edit'])->name('budget_item.edit');
    Route::put('/budget_item/update/{generalBudgetItem}', [BudgetItemController::class, 'update'])->name('budget_item.update');
    Route::delete('/budget_item/destroy/{generalBudgetItem}', [BudgetItemController::class, 'destroy'])->name('budget_item.destroy');

});

require __DIR__.'/auth.php';
