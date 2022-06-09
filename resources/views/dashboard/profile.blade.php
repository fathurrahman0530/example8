@extends('layouts.app')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-md-3 container-fluid" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card mb-3">
  <form action="/update-profile" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-header position-relative min-vh-25">
      <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url({{asset('assets/img/generic/4.jpg')}});"></div>
      <!--/.bg-holder-->
      
      <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
        <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> 
          @if (Auth::user()->profile)
          <img src="{{asset('storage/'.$data->profile)}}" width="200" alt="" data-dz-thumbnail="data-dz-thumbnail">
          @else
          <img src="{{asset('images/default.png')}}" width="200" alt="" data-dz-thumbnail="data-dz-thumbnail">
          @endif
          <input class="d-none" id="profile-image" name="profile" type="file">
          <label class="mb-0 overlay-icon d-flex flex-center" for="profile-image">
            <span class="bg-holder overlay overlay-0"></span>
            <span class="z-index-1 text-white dark__text-white text-center fs--1">
              <svg class="svg-inline--fa fa-camera fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"></path>
              </svg><!-- <span class="fas fa-camera"></span> Font Awesome fontawesome.com -->
              <span class="d-block">Update</span>
            </span>
          </label>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-3">
          <h4 class="mt-7">{{$data->fullname}}<span data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Verified" aria-label="Verified"></span>
          </h4>
          <div class="border-dashed-bottom my-2 d-lg-none"></div>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-5 d-flex justify-content-end">
          <div class="row">
            <div class="col-lg-6 form-group">
              <label for="fullname">Fullname</label>
              <input type="text" name="fullname" id="fullname" class="form-control" value="{{ $data->fullname }}">
            </div>
            <div class="col-lg-6 form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" value="{{ $data->username }}">
            </div>
            <div class="col-lg form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" value="{{ $data->email }}">
            </div>
            <div class="col-lg form-group">
              <label for="conf-password">New Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="col-lg-12 mt-2 d-flex justify-content-end">
              <button type="submit" class="btn btn-success " name="update">Update</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection