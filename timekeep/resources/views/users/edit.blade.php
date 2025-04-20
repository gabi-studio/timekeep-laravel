@extends('layout')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

        <label for="role">Role:</label>
        <input type="text" name="role" value="{{ old('role', $user->role) }}" required>

        <label for="photo_path">Profile Photo:</label>
        <input type="file" name="photo_path">

        <button type="submit">Update User</button>
    </form>
@endsection
