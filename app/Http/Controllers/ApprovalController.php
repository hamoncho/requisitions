<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Requisition;

class ApprovalController extends Controller
{
    public function index()
    {
        $requisitions = Requisition::where('current_approver_id', auth()->id())
            ->where('status', 'pending_approval')
            ->get();

        return view('approvals.index', compact('requisitions'));
    }
}
