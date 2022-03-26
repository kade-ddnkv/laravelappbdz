@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-3">Users</h2>
        <div class="mb-3">
            <a class="btn btn-dark" href="{{ route('users.create') }}">Create New</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->first()->name }}</td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{ route('users.edit', $user) }}">Show And Edit</a>
                        <a href="#" class="btn btn-outline-danger" onclick="
                            var result = confirm('Are you sure you want to delete this record?');
                            if(result){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $user->id }}').submit();
                            }">
                            Delete
                        </a>

                        <form method="POST" id="delete-form-{{ $user->id }}"
                              action="{{ route('users.destroy', $user) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
