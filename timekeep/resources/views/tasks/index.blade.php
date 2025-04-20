@extends('layout')

@section('content')
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
    
    <!-- Display all tasks -->
    @foreach ($tasks as $task)
        <p>
            {{ $task->name }} | Status: {{ $task->status }} |
            <a href="{{ route('tasks.show', $task->id) }}">Show</a> | 
            <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
        </p>
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    @endforeach
@endsection
