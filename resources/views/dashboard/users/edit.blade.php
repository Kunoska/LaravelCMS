@extends('layouts.dashboard')
@section('content')
    <div class="col-6">
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group mt-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name">
            </div>
            <div class="form-group mt-2">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" value="{{ $user->email }}" name="email">
            </div>
            <div class="form-group mt-2">
                <label for="role">Roles</label>
                <select name="role_id" class="form-control" id="role">
                    @foreach($roles as $role)
                        <option selected="{{ $user->role->id }}" value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-xl-4"> EDIT USER </button>
        </form>

    </div>
@endsection
