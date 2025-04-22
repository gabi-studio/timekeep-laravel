<?php   

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // The 'index' method that will be triggered by the '/dashboard' route
    public function index(Request $request)
    {
        // Controller logic for fetching tasks, projects, applying filters, etc.

        $availableProjects = Project::all();  // Get all available projects
        $availableTasks = Task::all();  // Get all available tasks

        // Filter tasks and projects based on the request
        $tasks = Task::query();
        $projects = Project::query();

        //by project_id
        if ($request->has('project_id')) {
            $tasks->where('project_id', $request->input('project_id'));
            $projects->where('id', $request->input('project_id'));
        }

        // by date due
        if ($request->has('due_date')) {
            $tasks->whereDate('due_date', $request->input('due_date'));
            $projects->whereDate('due_date', $request->input('due_date'));
        }
        // by status
        if ($request->has('status')) {
            $tasks->where('status', $request->input('status'));
            $projects->where('status', $request->input('status'));
        }

    

        // Get the filtered tasks and projects
        $tasks = $tasks->get();
        $projects = $projects->get();

        // Return the dashboard view with the tasks, projects, and available filter data
        return view('dashboard', compact('tasks', 'projects', 'availableProjects', 'availableClients'));
    }
}


?>