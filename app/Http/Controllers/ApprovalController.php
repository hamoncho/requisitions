<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Requisition;
use App\Models\RequisitionApproval;
use App\Models\RequisitionItem;

class ApprovalController extends Controller
{
    public function index()
    {
        $requisitions = Requisition::where('current_approver_id', auth()->id())
            ->where('status', 'pending_approval')
            ->get();

        $approved = RequisitionApproval::where('approver_id', auth()->id())
            ->where('status', 'approved')
            ->get()
            ->map(function ($requisitionApproval) {
                return $requisitionApproval->requisition;
            });

        $rejected = RequisitionApproval::where('approver_id', auth()->id())
            ->where('status', 'rejected')
            ->get()
            ->map(function ($requisitionApproval) {
                return $requisitionApproval->requisition;
            });

        return view('approvals.index', compact('requisitions', 'approved', 'rejected'));
    }
}
