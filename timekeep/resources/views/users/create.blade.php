@extends('layout')

@section('content')
    <h1>Create User</h1>
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="role">Role:</label>
        <input type="text" name="role" value="{{ old('role') }}" required>

        <label for="photo_path">Profile Photo:</label>
        <input type="file" name="photo_path">

        <button type="submit">Create User</button>
    </form>
@endsection
