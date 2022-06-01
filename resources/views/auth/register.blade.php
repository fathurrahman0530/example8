@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="/register" class="container-fluid col-md-3" method="post">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" class="form-control" name="fullname" id="fullname">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group mt-3">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
            </div>
            <small>Already account? <a href="/login">Login Now!</a></small>
        </form>
    </div>
@endsection
