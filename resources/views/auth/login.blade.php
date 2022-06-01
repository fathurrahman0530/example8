@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="/login" method="post" class="col-md-3 container-fluid">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group mt-3">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
            <small>Not Registered? <a href="/register">Register Now!</a></small>
        </form>
    </div>
@endsection
