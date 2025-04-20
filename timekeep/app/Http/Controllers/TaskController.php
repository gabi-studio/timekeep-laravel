<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all tasks and return the view with the tasks
        return view('tasks.index', [
            'tasks' => Task::all(),
            // 'tasks' is a collection of all tasks in the database
            // Eloquent makes it easier to retrieve data from the database in a readable format
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new task
        return view('tasks.create');
        // Extend this to pass additional data if needed, such as available projects or users
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        // Create a new task using the validated data from the request
        Task::create($request->validated());

        // Redirect to the task index page after storing the new task
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        // Return the view to display a single task's details
        return view('tasks.show', compact('task'));
        // compact('task') passes the task data to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        // Return the view for editing the task, passing the task data
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        // Update the task with the validated data from the request
        $task->update($request->validated());

        // Redirect to the task index page after updating the task
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // Delete the task from the database
        $task->delete();

        // Redirect to the task index page after deleting the task
        return redirect()->route('tasks.index');
    }
}
