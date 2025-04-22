<!-- resources/views/dashboard.blade.php -->

@extends('layout')

@section('content')
    <h1>Dashboard</h1>

    <div class="dashboard">
        

        <h3>Recent Projects</h3>
        <ul>
            @foreach ($projects as $project)
                <li>{{ $project->name }} - {{ $project->description }}</li>
            @endforeach
        </ul>

        <h3>Recent Tasks</h3>
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->name }} - {{ $task->description }}</li>
            @endforeach
        </ul>
    </div>

@endsection
