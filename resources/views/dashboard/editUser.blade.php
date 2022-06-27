@extends('layouts.app')

@section('content')
<a href="/manage-role" class="btn btn-success btn-sm mb-3" style="margin-right: 10px;">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left text-900 fs-3"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
</a>
{{-- {{ dd($data); }} --}}
<div class="card col-lg-6">
  <div class="card-body">
    <form action="/user-edit" method="POST">
      @csrf
      <input type="number" value="{{ $data->id }}" name="idUser" hidden>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="fullname">Fullname</label>
        <div class="col-sm-10">
          <input class="form-control" id="fullname" type="text" name="fullname" value="{{ $data->fullname }}">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="username">Username</label>
        <div class="col-sm-10">
          <input class="form-control" id="username" type="text" name="username" value="{{ $data->username }}">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="email">Email</label>
        <div class="col-sm-10">
          <input class="form-control" id="email" type="text" name="email" value="{{ $data->email }}">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="recipient-name">Role User</label>
        <div class="col-sm-10">
          <select class="form-select js-choice" id="organizerSingle" size="1" name="roleUser">
            <option value="">Select organizer...</option>
            <option value="1" {{ $data->role == 1 ? 'selected' : '' }}>Pengelola</option>
            <option value="2" {{ $data->role == 2 ? 'selected' : '' }}>Pengguna</option>
          </select> 
        </div>
      </div>
      <button class="btn btn-primary" style="margin-left: 550px" type="submit">Update User</button>
    </form>
  </div>
</div>
@endsection