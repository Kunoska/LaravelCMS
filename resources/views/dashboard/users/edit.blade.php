@extends('layouts.dashboard')
@section('content')
    <h1>Tuka sum vo edit blade view</h1>

    <div class="container">
        <div class="col-12">
                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                                <div class="form-group mt-2">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                {{--                                <div class="form-group mt-2">--}}
                                {{--                                    <label for="role">Roles</label>--}}
                                {{--                                    <select name="role_id" class="form-control" id="role">--}}
                                {{--                                        @foreach($roles as $role)--}}
                                {{--                                            <option value="{{ $role->id }}">{{ $role->name }}</option>--}}
                                {{--                                        @endforeach--}}
                                {{--                                    </select>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="form-group mt-2">--}}
                                {{--                                    <label for="country_id">Countries</label>--}}
                                {{--                                    <select name="country_id" class="form-control" id="country_id">--}}
                                {{--                                        @foreach($countries as $country)--}}
                                {{--                                            <option value="{{ $country->id }}">{{ $country->name }}</option>--}}
                                {{--                                        @endforeach--}}
                                {{--                                    </select>--}}
                                {{--                                </div>--}}
                                <div class="form-group mt-2">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary mt-xl-4"> EDIT USER </button>
                            </form>

        </div>
    </div>
@endsection
