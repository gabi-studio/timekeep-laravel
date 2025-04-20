@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}">Create New Project</a>
    
    <!-- Display all projects -->
    @foreach ($projects as $project)
        <p>
            {{ $project->name }} | 
            <a href="{{ route('projects.show', $project->id) }}">Show</a> | 
            <a href="{{ route('projects.edit', $project->id) }}">Edit</a>
        </p>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    @endforeach
@endsection
