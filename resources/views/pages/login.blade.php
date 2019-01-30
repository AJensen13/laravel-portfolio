@extends('layouts.login')


@section('content')
    <form method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="loginEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="loginPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
