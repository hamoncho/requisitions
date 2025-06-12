<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $processes = Process::all();
        return view('process.index', compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        return view('process.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $process = Process::create([
            'index' => $request->index,
        ]);

        foreach ($request->projects as $project) {
            DB::table('process_project')->insert([
                'process_id' => $process->id,
                'project_id' => $project
            ]);
        }


        return redirect()->route('process.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Process $process)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Process $process)
    {
        $projects = Project::all();
        return view('process.edit', compact('process', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Process $process)
    {
        $process->update([
            'index' => $request->index,
        ]);

        DB::table('process_project')->where('process_id', $process->id)->delete();

        foreach ($request->projects as $project) {
            DB::table('process_project')->insert([
                'project_id' => $project,
                'process_id' => $process->id
            ]);
        }

        return redirect()->route('process.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Process $process)
    {
        $process->delete();
        return redirect()->route('process.index');
    }
}
