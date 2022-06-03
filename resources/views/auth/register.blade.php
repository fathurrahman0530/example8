@extends('layouts.app')

@section('content')
<div class="row">
    <form action="/register" class="container-fluid col-md-3" method="post">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="fullname">Fullname</label>
            <input type="text" id="fullname" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="fullname" value="{{ old('fullname') }}">
            @error('fullname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mt-3">
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </div>
        <small>Already account? <a href="/login">Login Now!</a></small>
    </form>
</div>
@endsection
