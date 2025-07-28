<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneralBudgetItemRequest;
use App\Http\Requests\UpdateGeneralBudgetItemRequest;
use App\Models\GeneralBudgetItem;
use Exception;
use Illuminate\Support\Facades\Log;

class GeneralBudgetItemController extends Controller
{
    /**
     * Display a menu
     */
    public function menu()
    {
        return view('generalbudgetitem.menu');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generalBudgetItems = GeneralBudgetItem::all();
        return view('generalbudgetitem.index', compact('generalBudgetItems'));
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
        try {
            GeneralBudgetItem::create($request->all());
            return redirect()->route('general_budget_item.index')->with('success', trans('GeneralBudgetItem created successfuly'));
        } catch (Exception $e) {
            Log::error('Error saving GeneralBudgetItem: ' . $e->getMessage());
            return back()->with('error', trans('Error'));
        }
        return back()->with('error', trans('Error'));
    }

    /**
     * Display the specified resource.
     */
    public function show(GeneralBudgetItem $generalBudgetItem)
    {
        return view('generalbudgetitem.show', compact('generalBudgetItem'));
    }

    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $generalBudgetItems = GeneralBudgetItem::with('budgetItems')->get();
        return view('generalbudgetitem.list', compact('generalBudgetItems'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralBudgetItem $generalBudgetItem)
    {
        return view('generalbudgetitem.edit', compact('generalBudgetItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneralBudgetItemRequest $request, GeneralBudgetItem $generalBudgetItem)
    {
        try {
            $generalBudgetItem->update($request->all());
            return redirect()->route('general_budget_item.index')->with('success', trans('Updated successfuly'));
        } catch (Exception $e) {
            Log::error('Error updating GeneralBudgetItem: ' . $e->getMessage());
            return back()->with('error', trans('error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralBudgetItem $generalBudgetItem)
    {
        try {
            $generalBudgetItem->delete();
            return redirect()->route('general_budget_item.index')->with('success', trans('Deleted successfuly'));
        } catch (Exception $e) {
            Log::error('Error deleting GeneralBudgetItem: ' . $e->getMessage());
            return back()->with('error', trans('error'));
        }
    }
}
