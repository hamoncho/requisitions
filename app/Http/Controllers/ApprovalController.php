<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Requisition;
use App\Models\RequisitionItem;

class ApprovalController extends Controller
{
    public function index()
    {

        // Planiacion tiene que establecer el presupuesto.
        if (auth()->user()->role == 'planning') {
            $requisitions = RequisitionItem::whereNull('type_resource')
                ->get()
                ->map(function ($requisitionItem, $key) {
                    return $requisitionItem->requisition;
                });
            // Remove duplicate requisitions
            $requisitions = $requisitions->unique('id')
                ->where('status', 'pending_approval')
                ->where('current_approver_id', auth()->id());

            return view('approvals.index', compact('requisitions'));
        }

        $requisitions = Requisition::where('current_approver_id', auth()->id())
            ->where('status', 'pending_approval')
            ->get();

        return view('approvals.index', compact('requisitions'));
    }
}
