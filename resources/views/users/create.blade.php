@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label class="form-label">
                    Name
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Email
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Password
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Role
                    <select class="form-select @error('role_id') is-invalid @enderror" name="role_id">
                        @foreach (\App\Models\Role::all() as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>

                    @error('role_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <button type="submit" class="btn btn-dark mt-3">Create</button>
        </form>
    </div>
@endsection
