<?php

namespace App\Http\Controllers;

use App\Models\Involved;
use App\Models\Objective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objectives = Objective::all();
        return view('objective.index', compact('objectives'));
    }

    public function list(){
        $objectives = Objective::all();
        return view('objective.list',compact('objectives'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $involveds = Involved::all();
        return view('objective.create', compact('involveds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'index' => 'required',
            'name' => 'required',
            'description' => 'required',
            'involveds' => 'required|array|min:1',
            'involveds.*' => 'exists:involveds,id',
        ]);

        $objective = Objective::create([
            'index' => $request->index,
            'name' => $request->name,
            'description' => $request->description
        ]);

        foreach ($request->involveds as $involved) {
            DB::table('involved_objective')->insert([
                'involved_id' => $involved,
                'objective_id' => $objective->id
            ]);
        }

        return redirect()->route('objective.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Objective $objective)
    {
        return view('objective.show', compact('objective'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Objective $objective)
    {
        $involveds = Involved::all();
        return view('objective.edit', compact('objective', 'involveds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Objective $objective)
    {
        $request->validate([
            'index' => 'required',
            'name' => 'required',
            'description' => 'required',
            'involveds' => 'required|array|min:1',
            'involveds.*' => 'exists:involveds,id',
        ]);

         $objective->update([
            'index' => $request->index,
            'name' => $request->name,
            'description' => $request->description
        ]);

        DB::table('involved_objective')->where('objective_id',$objective->id)->delete();
        foreach ($request->involveds as $involved) {
            DB::table('involved_objective')->insert([
                'involved_id' => $involved,
                'objective_id' => $objective->id
            ]);
        }
/*
        foreach ($request->involveds as $involved) {
            DB::table('involved_objective')->where('objective_id', $objective->id)->update([
                'involved_id' => $involved,
            ]);
        }
*/
        return redirect()->route('objective.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Objective $objective)
    {
        DB::table('involved_objective')->where('objective_id',$objective->id)->delete();
        $objective->delete();
        return redirect()->route('objective.index');
    }
}
