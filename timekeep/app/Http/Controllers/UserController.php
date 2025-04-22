<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all users and return the view with the users
        return view('users.index', [
            'users' => User::all(),
            // 'users' is a collection of all users in the database
            // Eloquent makes it easier to work with databases by providing a "human-readable" syntax
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new user
        return view('users.create');
        // You can extend this to pass any data needed for creating a user (e.g., roles or permissions)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // Create a new user using the validated data from the request
        User::create($request->validated());

        // Redirect to the user index page after storing the new user
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Return the view to display a single user's details
        return view('users.show', compact('user'));
        // compact('user') is shorthand for passing the user data to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Return the view for editing the user, passing the user data
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // Update the user with the validated data from the request
        $user->update($request->validated());

        // Redirect to the user index page after updating the user
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Delete the user from the database
        Student::destroy($user->id);

        // Redirect to the user index page after deleting the user
        return redirect()->route('users.index');
    }
}
