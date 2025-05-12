<?php

namespace App\Http\Controllers;

use App\Models\Involved;
use Illuminate\Http\Request;

class InvolvedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $involveds = Involved::all();
        return view('involved.index',compact('involveds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('involved.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Involved::create([
            'name'=> $request->name
        ]);
        return redirect()->route('involved.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Involved $involved)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Involved $involved)
    {
        return view('involved.edit',compact('involved'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Involved $involved)
    {
        $involved->update($request->all());
        return redirect()->route('involved.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Involved $involved)
    {
        $involved->delete();
        return redirect()->route('involved.index');
    }
}
