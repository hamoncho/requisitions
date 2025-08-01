<?php

namespace App\Http\Controllers;

use App\Mail\RequestApproval;
use App\Models\Indicator;
use App\Models\Process;
use App\Models\Project;
use App\Models\Requisition;
use App\Models\User;
use App\Services\ApprovalService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requisitions = auth()->user()->requisitions()->latest()->get();
        return view('requisition.index', compact('requisitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // App\Http\Controllers\RequisitionController.php

    public function create()
    {
        $processes = Process::all();
        $projects = Project::all();
        $indicators = Indicator::all();

        return view('requisition.create', compact('processes', 'projects', 'indicators'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ApprovalService $approvalService)
    {
        $request->validate([
            'processes_id' => 'required|exists:processes,id',
            'indicators_id' => 'required|exists:indicators,id',
        ]);

        $requisition = Requisition::create([
            'processes_id' => $request->processes_id,
            'indicators_id' => $request->indicators_id,
            'users_id' => auth()->id(),
        ]);

        //$approvalService->startApprovalProcess($requisition);

        return redirect()->route('requisition_items.index', $requisition);
    }

    /**
     * Display the specified resource.
     */
    public function show(Requisition $requisition)
    {
        $requisition->load('approvals.approver');
        return view('requisition.show', compact('requisition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requisition $requisition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requisition $requisition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requisition $requisition)
    {
        if ($requisition->status == 'draft' || $requisition->status == 'system') {
            $requisition->delete();
            return back()->with('success', 'Requisicion borrada con exito');
        }
        return back();
    }

    public function list()
    {
        $requisitions = Requisition::all();
        $max_folio = Requisition::max('folio');
        return view('requisition.list', compact('requisitions', 'max_folio'));
    }

    public function setNextFolio(Request $request)
    {
        $request->validate([
            'next_folio' => 'required|integer|min:'.(Requisition::max('folio') + 1),
        ]);

        Requisition::create([
            'folio' => $request->next_folio,
            'status' => 'system',
            'users_id' => auth()->id(),
            'processes_id' => 0,
            'indicators_id' => 0,
        ]);

        return back()->with('success', 'Next folio set successfully.');
    }

    public function startApprovalProcess(Requisition $requisition, ApprovalService $approvalService)
    {
        if ($requisition->status == 'draft') {
            $approvalService->startApprovalProcess($requisition);
            return redirect()->route('requisition.show', $requisition)->with('success', trans('requisition.sent_success'));
        }
        return redirect()->route('requisition.show', $requisition)->with('warning', trans('requisition.been_sent'));
    }

    public function approve(Request $request, Requisition $requisition, ApprovalService $approvalService)
    {
        $approvalService->approve($requisition, auth()->user(), $request->input('comments'));

        return back()->with('success', 'Requisition approved.');
    }

    public function reject(Request $request, Requisition $requisition, ApprovalService $approvalService)
    {
        $approvalService->reject($requisition, auth()->user(), $request->input('comments'));

        return back()->with('success', 'Requisition rejected.');
    }

    public function pdf(Requisition $requisition)
    {
        if (auth()->user()->role == 'planning' && $requisition->status == 'approved') {
            $directive = User::Where('role', 'directive')->first();
            $requisition->load('approvals.approver');
            $pdf = Pdf::setPaper('letter', 'landscape')->loadView('pdf.requisition', compact('requisition', 'directive'));

            //return view('pdf.requisition',compact('requisition','directive'));
            return $pdf->download('requisition-'.$requisition->folio.'.pdf');
        }
        return back()->with('error', trans('requisition.not_authorized'));
    }
}
