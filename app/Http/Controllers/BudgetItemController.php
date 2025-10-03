<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBudgetItemRequest;
use App\Http\Requests\UpdateBudgetItemRequest;
use App\Models\BudgetItem;
use App\Models\GeneralBudgetItem;

class BudgetItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgetItems = BudgetItem::all();
        return view('budgetitem.index', compact('budgetItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generalBudgetitems = GeneralBudgetItem::all();
        return view('budgetitem.create',compact('generalBudgetitems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBudgetItemRequest $request)
    {
        $budgetitem = new BudgetItem;
        $budgetitem->full_code = $request->full_code;
        $budgetitem->name = $request->name;
        $budgetitem->general_budget_item_id = $request->general_budget_item_id;
        $budgetitem->description = $request->description;
        $budgetitem->save();

        return redirect()->route('budget_item.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $budgetItems = BudgetItem::with('generalBudgetItem')->get();
        return view('budgetitem.list', compact('budgetItems'));
    }

    /**
     * Display the specified resource.
     */
    public function show(BudgetItem $budgetItem)
    {
        $budgetItem->load('generalBudgetItem');
        return view('budgetitem.show', compact('budgetItem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BudgetItem $budgetItem)
    {
        $generalBudgetitems = GeneralBudgetItem::all();
        return view('budgetitem.edit',compact('budgetItem','generalBudgetitems'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBudgetItemRequest $request, BudgetItem $budgetItem)
    {
        $budgetItem->update($request->all());
        return redirect()->route('budget_item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BudgetItem $budgetItem)
    {
        $budgetItem->delete();
        return redirect()->route('budget_item.index');
    }
}
