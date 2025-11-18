<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of projects.
     */
    public function index()
    {
        $projects = Projects::orderBy('id', 'desc')->get();
        return view('admin.pages.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('admin.pages.projects.create');
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(Request $request)
    {


        Projects::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Show the form for editing a project.
     */
    public function edit(Projects $project)
    {
        return view('admin.pages.projects.edit', compact('project'));
    }

    /**
     * Update a project in storage.
     */
    public function update(Request $request, Projects $project)
    {


        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Delete a project.
     */
    public function destroy(Projects $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

 


}
