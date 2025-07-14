<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Objective;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actions = Action::all();
        return view('action.index', compact('actions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objectives = Objective::all();
        return view('action.create', compact('objectives'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Action::create($request->all());
        return redirect()->route('action.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $actions = Action::all();
        return view('action.list', compact('actions'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Action $action)
    {
        $action->load('goals', 'projects.indicators', 'projects.processess');
        return view('action.show', compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Action $action)
    {
        $objectives = Objective::all();
        return view('action.edit', compact('action','objectives'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Action $action)
    {
        $action->update($request->all());
        return redirect()->route('action.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Action $action)
    {
        $action->delete();
        return redirect()->route('action.index');
    }
}
