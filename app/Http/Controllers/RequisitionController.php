<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use App\Models\Process;
use App\Models\Project;
use App\Models\Requisition;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        return view('requisition.create',compact('processes', 'projects','indicators'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        return redirect()->route('requisition_items.index', $requisition);
    }

    /**
     * Display the specified resource.
     */
    public function show(Requisition $requisition)
    {
        //
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
        //
    }
}
