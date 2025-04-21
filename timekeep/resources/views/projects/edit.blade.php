@extends('layout')

@section('content')
    <h1>Edit Project</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Project Name:</label>
        <input type="text" name="name" value="{{ old('name', $project->name) }}" required>

        <label for="description">Description:</label>
        <textarea name="description">{{ old('description', $project->description) }}</textarea>

        <label for="project_type">Project Type:</label>
        <input type="text" name="project_type" value="{{ old('project_type', $project->project_type) }}" required>

        <label for="status">Status:</label>
        <input type="text" name="status" value="{{ old('status', $project->status) }}" required>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" value="{{ old('start_date', $project->start_date) }}">

        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date" value="{{ old('due_date', $project->due_date) }}">

        <label for="client_id">Client:</label>
        <input type="text" name="client_id" value="{{ old('client_id', $project->client_id) }}">

        <label for="link">Link:</label>
        <input type="text" name="link" value="{{ old('link', $project->link) }}">

        <label for="notes">Notes:</label>
        <textarea name="notes">{{ old('notes', $project->notes) }}</textarea>

        <button type="submit">Update Project</button>
    </form>
@endsection
