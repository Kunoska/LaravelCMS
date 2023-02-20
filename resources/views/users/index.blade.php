@extends('layouts.dashboard')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
                <a href="{{ route('users.create') }}" class="btn btn-success "> Create User</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table mt-xl-4">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="#">{{ $user->id }}</a></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td><a href="#" class="btn btn-warning">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-10"
@endsection
