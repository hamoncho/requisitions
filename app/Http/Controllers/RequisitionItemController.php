<?php

namespace App\Http\Controllers;

use App\Models\GeneralBudgetItem;
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
        if(auth()->user()->supervisor === null){
            return back()->with('warning',trans('requisition.dont_have_boss_assigned'));
        }

        $requisitionItems = $requisition->requisitionItems()->get();
        if ($requisition->user->id == auth()->user()->id) {
            return view('requisition.items.index', compact('requisition', 'requisitionItems'));
        }

        return back()->with('error', trans('requisition.dont_belongs_to_you'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Requisition $requisition)
    {
        $general_budget_items = GeneralBudgetItem::with('budgetItems')->get();
        return view('requisition.items.create', compact('requisition', 'general_budget_items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Requisition $requisition)
    {
        if($requisition->requisitionItems->count() >= 11){
            return redirect()->route('requisition_items.index', $requisition)->with('warning', trans('requisition.has_many_items'));
        }

        $request->validate([
            'name' => 'required|string|max:64',
            'budget_item_id' => 'required|exists:budget_items,id',
            'amount' => 'required|integer|min:1',
            'unit' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        if ($requisition->user->id == auth()->user()->id) {
            $requisition->requisitionItems()->create([
                'name' => $request->name,
                'budget_item_id' => $request->budget_item_id,
                'amount' => $request->amount,
                'unit' => $request->unit,
                'price' => $request->price,

            ]);
            return redirect()->route('requisition_items.index', $requisition);
        }

        return back()->with('error', 'requisition.dont_belongs_to_you');
    }

    /**
     * Display the specified resource.
     */
    public function show(Requisition $requisition, RequisitionItem $item)
    {
        return view('requisition.items.show', compact('requisition', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requisition $requisition, RequisitionItem $requisition_item)
    {
        $general_budget_items = GeneralBudgetItem::with('budgetItems')->get();
        return view('requisition.items.edit', compact('requisition', 'requisition_item', 'general_budget_items'));
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
            'price' => 'required|numeric|min:0',
        ]);


        if ($requisition->user->id == auth()->user()->id) {
            $requisition_item->update([
                'name' => $request->name,
                'budget_item_id' => $request->budget_item_id,
                'amount' => $request->amount,
                'unit' => $request->unit,
                'price' => $request->price,

            ]);
            return redirect()->route('requisition_items.index', $requisition);
        }
        return back()->with('error', trans('requisition.dont_belongs_to_you'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateTypeResource(Request $request, Requisition $requisition, RequisitionItem $requisition_item)
    {
        $request->validate([
            'type_resource' => 'required',
        ]);

        if($request->type_resource == 'null'){
            $request->type_resource = null;
        }

        if (auth()->user()->role == 'requisition') {
            $requisition_item->update([
                'type_resource' => $request->type_resource,
            ]);

            return back();
        }

        return back()->with('error', trans('requisition.not_authorized'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requisition $requisition, RequisitionItem $requisition_item)
    {
        if ($requisition->user->id == auth()->user()->id) {
            $requisition_item->delete();
            return back();
        }

        return back()->with('error', trans('requisition.dont_belongs_to_you'));
    }
}
