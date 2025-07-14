<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use App\Models\Project;
use Illuminate\Http\Request;

class IndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $indicators = Indicator::all();
        return view('indicator.index', compact('indicators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        return view('indicator.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Indicator::create($request->all());
        return redirect()->route('indicator.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $indicators = Indicator::all();
        return view('indicator.list', compact('indicators'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Indicator $indicator)
    {
        return view('indicator.show', compact('indicator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indicator $indicator)
    {
        $projects = Project::all();
        return view('indicator.edit',compact('projects','indicator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Indicator $indicator)
    {
        $indicator->update($request->all());
        return redirect()->route('indicator.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indicator $indicator)
    {
        $indicator->delete();
        return redirect()->route('indicator.index');
    }
}
