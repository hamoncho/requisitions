<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneralBudgetItemRequest;
use App\Http\Requests\UpdateGeneralBudgetItemRequest;
use App\Models\GeneralBudgetItem;

class GeneralBudgetItemController extends Controller
{
   /**
    * Display a menu
    */
    public function menu(){
        return view('generalbudgetitem.menu');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generalBudgetItem = GeneralBudgetItem::all();
        return view('generalbudgetitem.index', compact('generalBudgetItem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('generalbudgetitem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGeneralBudgetItemRequest $request)
    {
        $generalBudgetItem = new GeneralBudgetItem;
        $generalBudgetItem->code = $request->code;
        $generalBudgetItem->name = $request->name;
        $generalBudgetItem->save();

        return redirect()->route('general_budget_item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GeneralBudgetItem $generalBudgetItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralBudgetItem $generalBudgetItem)
    {
        return view('generalbudgetitem.edit',compact('generalBudgetItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneralBudgetItemRequest $request, GeneralBudgetItem $generalBudgetItem)
    {
       $generalBudgetItem->update($request->all());
        return redirect()->route('general_budget_item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralBudgetItem $generalBudgetItem)
    {
        $generalBudgetItem->delete();
        return redirect()->route('general_budget_item.index');
    }
}
