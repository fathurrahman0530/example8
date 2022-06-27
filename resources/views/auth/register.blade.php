@extends('layouts.app')

@section('content')
<div class="row min-vh-100 flex-center g-0">

    <div class="col-lg-8 col-xxl-5 position-relative">

        <img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250">
        <img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
      <div class="card col-md overflow-hidden z-index-1">
        
        <div class="card-body p-0">
          <div class="g-0 h-100">
            <div class="col-md d-flex flex-center">
              <div class="p-md-5 flex-grow-1">
                <div class="row d-flex justify-content-center">
                  <div class="col-auto">
                    <h3>Account Register</h3>
                  </div>
                </div>
                <form action="/add-members" method="POST">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label" for="card-fullname">Fullname</label>
                    <input class="form-control" name="fullname" id="card-fullname" type="fullname">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="card-username">Username</label>
                    <input class="form-control" name="username" id="card-username" type="username">
                  </div>
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
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                    <a href="/manage-role" class="btn btn-secondary d-block w-100 mt-3">Cancel</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- <div class="row">
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
</div> --}}
@endsection
