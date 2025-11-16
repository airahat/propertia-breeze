<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return view('admin.pages.agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:agents,email',
            'phone' => 'required|string|max:20',
        ]);

        Agent::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('agents.index')->with('success', 'Agent created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
