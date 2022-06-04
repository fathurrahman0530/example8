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
<div class="row min-vh-100 flex-center g-0">
    <div class="col-lg-8 col-xxl-5 position-relative">
        <img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250">
        <img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
      <div class="card col-md overflow-hidden z-index-1">
        <div class="card-body">
          <div class="g-0 h-100">
            <div class="col-md d-flex flex-center">
              <div class="p-md-5 flex-grow-1">
                <div class="row d-flex justify-content-center">
                  <div class="col-auto">
                    <h3>Account Login</h3>
                  </div>
                </div>
                <form action="/login" method="POST">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label" for="card-email">Email address</label>
                    <input class="form-control" name="email" id="card-email" type="email">
                  </div>
                  <div class="mb-3">
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="card-password">Password</label>
                    </div>
                    <input class="form-control" name="password" id="card-password" type="password">
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button>
                  </div>
                </form>
                <small>Not registered? <a href="/register">Register Now!</a></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- <div class="row">
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
</div> --}}
@endsection
