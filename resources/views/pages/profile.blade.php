@extends('layouts.app')

@section('content')
    <h1>Profile Page</h1>
    <div>
        <img src="#" />
        <h3>{{ $user->name }}</h3>
        {{-- <p>Username: {{ $user->username }}</p> --}}
        <p>Email: {{ $user->email }}</p>
    </div>
@endsection
