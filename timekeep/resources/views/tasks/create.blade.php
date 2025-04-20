@extends('layout')

@section('content')
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label for="name">Task Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label for="description">Description:</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <label for="status">Status:</label>
        <input type="text" name="status" value="{{ old('status') }}" required>

        <label for="project_id">Project:</label>
        <select name="project_id">
            @foreach ($projects as $project)
                <option value="{{ $project->id }}" {{ old('project_id') == $project->id ? 'selected' : '' }}>{{ $project->name }}</option>
            @endforeach
        </select>

        <label for="user_id">User:</label>
        <select name="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="start_time">Start Time:</label>
        <input type="time" name="start_time" value="{{ old('start_time') }}">

        <label for="end_time">End Time:</label>
        <input type="time" name="end_time" value="{{ old('end_time') }}">

        <label for="time_spent">Time Spent:</label>
        <input type="text" name="time_spent" value="{{ old('time_spent') }}">

        <label for="link">Link:</label>
        <input type="text" name="link" value="{{ old('link') }}">

        <button type="submit">Create Task</button>
    </form>
@endsection
