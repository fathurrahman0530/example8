@extends('layouts.app')

@section('content')
<div class="card mb-3">
  <div class="card-header position-relative min-vh-25">
    <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url({{asset('assets/img/generic/4.jpg')}});"></div>
    <!--/.bg-holder-->

    <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm" src="{{asset('assets/img/team/2.jpg')}}" width="200" alt=""></div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-3">
        <h4 class="mt-7"> Anthony Hopkins<span data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Verified" aria-label="Verified"></span>
        </h4>
        <div class="border-dashed-bottom my-2 d-lg-none"></div>
      </div>
      <div class="col-lg-4"></div>
      <div class="col-lg-5 d-flex justify-content-end">
        <form action="/profile" method="post">
          <div class="row">
            <div class="col-lg-6 form-group">
              <label for="fullname">Fullname</label>
              <input type="text" name="fullname" id="fullname" class="form-control">
            </div>
            <div class="col-lg-6 form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="col-lg-12 form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="col-lg form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="col-lg form-group">
              <label for="conf-password">Confirm Password</label>
              <input type="password" name="conf-password" id="conf-password" class="form-control">
            </div>
            <div class="col-lg-12 mt-2 d-flex justify-content-end">
              <button type="submit" class="btn btn-success " name="update">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection