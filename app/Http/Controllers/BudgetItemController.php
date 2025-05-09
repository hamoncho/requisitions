<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBudgetItemRequest;
use App\Http\Requests\UpdateBudgetItemRequest;
use App\Models\BudgetItem;

class BudgetItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBudgetItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BudgetItem $budgetItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BudgetItem $budgetItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBudgetItemRequest $request, BudgetItem $budgetItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BudgetItem $budgetItem)
    {
        //
    }
}
