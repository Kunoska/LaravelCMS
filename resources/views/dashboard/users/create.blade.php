@extends('layouts.dashboard')
@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-12">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-8">
                            <form method="post" action="{{ route('users.store') }}">
                                @csrf
                                @method('POST')

                                <div class="form-group mt-2">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
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
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" >
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                                <button type="submit" class="btn btn-primary mt-xl-4">
                                    Submit
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
