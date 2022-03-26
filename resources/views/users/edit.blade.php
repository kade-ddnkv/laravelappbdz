@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('users.update', $user) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">
                    Name
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autofocus>

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
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ $user->email }}">

                    @error('email')
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

                    @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit changes</button>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('option[value="{{ $user->roles->first()->id }}"]').prop('selected', true);
        });
    </script>
@endsection
