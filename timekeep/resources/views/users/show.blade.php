@extends('layout')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Role: {{ $user->role }}</p>
    <p>Last Activity: {{ $user->last_activity_date }}</p>
    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
@endsection
