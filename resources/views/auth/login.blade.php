@extends('layouts.app')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-md-3 container-fluid" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show col-md-3 container-fluid" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row">
    <form action="/login" method="post" class="col-md-3 container-fluid">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group mt-3">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
        <small>Not Registered? <a href="/register">Register Now!</a></small>
    </form>
</div>
@endsection
