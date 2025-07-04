<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Requisition;

class ApprovalController extends Controller
{
    public function index()
    {

        // Planiacion tiene que establecer el presupuesto.
        if (auth()->user()->role == 'planning') {
            $requisitions = Requisition::all();
            return view('approvals.index', compact('requisitions'));
        }

        $requisitions = Requisition::where('current_approver_id', auth()->id())
            ->where('status', 'pending_approval')
            ->get();

        return view('approvals.index', compact('requisitions'));
    }
}
