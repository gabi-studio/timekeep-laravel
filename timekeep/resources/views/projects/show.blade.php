@extends('layout')

@section('content')
    <h1>{{ $project->name }}</h1>
    <p>Description: {{ $project->description }}</p>
    <p>Status: {{ $project->status }}</p>
    <p>Start Date: {{ $project->start_date }}</p>
    <p>Due Date: {{ $project->due_date }}</p>
    <p>Client: {{ $project->client_id }}</p>
    <p>Link: <a href="{{ $project->link }}">{{ $project->link }}</a></p>
    <p>Notes: {{ $project->notes }}</p>

    <a href="{{ route('projects.edit', $project->id) }}">Edit</a>
    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
@endsection
