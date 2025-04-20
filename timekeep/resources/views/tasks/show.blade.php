@extends('layouts.app')

@section('content')
    <h1>{{ $task->name }}</h1>
    <p>Description: {{ $task->description }}</p>
    <p>Status: {{ $task->status }}</p>
    <p>Project: {{ $task->project->name }}</p>
    <p>User: {{ $task->user->name }}</p>
    <p>Start Time: {{ $task->start_time }}</p>
    <p>End Time: {{ $task->end_time }}</p>
    <p>Time Spent: {{ $task->time_spent }}</p>
    <p>Link: <a href="{{ $task->link }}">{{ $task->link }}</a></p>

    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
@endsection
