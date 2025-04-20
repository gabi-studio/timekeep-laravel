<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all projects and return the view with the projects
        return view('projects.index', [
            'projects' => Project::all(),
            // 'projects' contains all projects retrieved from the database
            // This makes use of Eloquent to retrieve data easily
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new project
        return view('projects.create');
        // You can extend this method to pass additional data, such as clients or users for assignment
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        // Create a new project using the validated data from the request
        Project::create($request->validated());

        // Redirect to the project index page after storing the new project
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // Return the view to display a single project's details
        return view('projects.show', compact('project'));
        // compact('project') passes the project data to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // Return the view for editing the project, passing the project data
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        // Update the project with the validated data from the request
        $project->update($request->validated());

        // Redirect to the project index page after updating the project
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete the project from the database
        $project->delete();

        // Redirect to the project index page after deleting the project
        return redirect()->route('projects.index');
    }
}
