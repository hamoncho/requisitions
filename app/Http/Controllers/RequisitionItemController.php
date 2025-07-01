<?php

namespace App\Http\Controllers;

use App\Models\BudgetItem;
use App\Models\Requisition;
use App\Models\RequisitionItem;
use Illuminate\Http\Request;

class RequisitionItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Requisition $requisition)
    {
        $requisitionItems = $requisition->requisitionItems()->get();
        return view('requisition.items.index', compact('requisition', 'requisitionItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Requisition $requisition)
    {
        $budget_items = BudgetItem::all(); // Asumiendo que tienes un modelo BudgetItem
        return view('requisition.items.create', compact('requisition', 'budget_items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Requisition $requisition)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'budget_item_id' => 'required|exists:budget_items,id',
            'amount' => 'required|integer|min:1',
            'unit' => 'required|string|max:255',
            'type_resource' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $requisition->requisitionItems()->create($request->all());

        return redirect()->route('requisition_items.index', $requisition)
                         ->with('success', 'Requisition item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Requisition $requisition, RequisitionItem $item)
    {
        // No se usará directamente ya que la ruta resource tiene except(['show'])
        // Pero si lo necesitaras, aquí estaría la lógica.
        return view('requisition.items.show', compact('requisition', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requisition $requisition, RequisitionItem $requisition_item)
    {
        $budget_items = BudgetItem::all();
        return view('requisition.items.edit', compact('requisition', 'requisition_item', 'budget_items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requisition $requisition, RequisitionItem $requisition_item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'budget_item_id' => 'required|exists:budget_items,id',
            'amount' => 'required|integer|min:1',
            'unit' => 'required|string|max:255',
            'type_resource' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $requisition_item->update($request->all());

        return redirect()->route('requisition_items.index', $requisition)
                         ->with('success', 'Requisition item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requisition $requisition, RequisitionItem $requisition_item)
    {
        $requisition_item->delete();

        return redirect()->route('requisition_items.index', $requisition)
                         ->with('success', 'Requisition item deleted successfully.');
    }
}
