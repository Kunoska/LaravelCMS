@extends('layouts.dashboard')
@section('content')
    <div class="col-12">





        <!--Begin::table card-->
        <div class="card table-card table-nowrap mb-3 mb-lg-5">


            <div class="card-header">
                <h5 class="mb-0">  <a href="/dashboard/users/create" class="btn btn-primary bi bi-plus-circle"> ДОДАДИ КОРИСНИК </a></h5>
            </div>


            <div class="table-responsive table-card table-nowrap">
                <table class="table align-middle table-hover mb-0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Корисник</th>
                        <th>Улога</th>
                        <th>
                            Работни часови
                        </th>
                        <th class="text-end">Акција</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">{{ $user->name }}</h6>
                                        <small class="text-muted">{{ $user->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success fs-6">{{ $user->role->name }}</span>
                            </td>
                            <td>
                                <div class="width-120">
                                    <div class="progress height-5 rounded-pill">
                                        <div
                                            class="progress-bar bg-info progress-bar-striped progress-bar-animated rounded-pill"
                                            role="progressbar" aria-label="Animated striped example" aria-valuenow="54"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 54%"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary"> View </a>
                                        @csrf
                                        @method('GET')

                                    <!--Divider line-->
                                    <span class="border-start mx-2 d-block height-20"></span>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"> Edit </a>
                                        @csrf
                                        @method('GET')
                                    <!--Divider line-->
                                    <span class="border-start mx-2 d-block height-20"></span>
                                    <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"> DELETE </button>
                                    </form>


                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ends::table card-->


    </div>
@endsection
