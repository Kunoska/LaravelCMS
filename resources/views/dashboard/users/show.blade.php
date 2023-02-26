@extends('layouts.dashboard')
@section('content')
    <div class="col-md-12"
        <h1>Добредојде {{ $user->name }} во Ларавел</h1>
        <p>Вашата е-маил адреса е {{ $user->email }}</p>
        <p>Вашата сметка е креирана пред {{ $user->created_at->diffForHumans() }}</p>

        <form method="post" action="{{ route('users.destroy', $user->id) }}"
          @method('DELETE')
            @csrf
         <button type="submit" class="btn-danger">Delete</button>
    </div>
@endsection
