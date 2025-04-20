@extends('layout')

@section('content')
    <h1>Users</h1>
    <a href="{{ route('users.create') }}">Create New User</a>
    @foreach ($users as $user)
        <p>{{ $user->name }} | 
            <a href="{{ route('users.show', $user->id) }}">Show</a> | 
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
        </p>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    @endforeach
@endsection
