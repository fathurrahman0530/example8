@extends('layouts.app')

@section('content')
@if (Auth::user()->role == 1)
<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#createGroup">Create Group</button>
@else
<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#joinGroup">Join Group</button>
@endif

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-md-3 container-fluid" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row">
@foreach ($data['group'] as $row)
  <div class="col-lg mt-4">
    <div class="card col-lg-3" style="width: 15rem;">
      <div class="card-img-top">
        @if ($row->pictures)
        <img class="img-fluid" src="{{asset('storage/'.$row->pictures)}}" alt="Card image cap" />
        @else  
        <img class="img-fluid" src="{{asset('images/group.png')}}" alt="Card image cap" />
        @endif
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $row->name_group }}</h5>
        @if (Auth::user()->role == 1)
        <p class="card-text">Code : {{$row->code}}</p>
        @endif
        <a class="btn btn-primary btn-sm" href="/message/{{$row->id}}">Show</a>
      </div>
    </div> 
  </div>
  @endforeach
</div>

{{-- modal --}}
<div class="modal fade" id="createGroup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/create-group" method="POST">
        @csrf
        <div class="modal-body p-0">
          <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
            <h4 class="mb-1" id="modalExampleDemoLabel">Add a new group</h4>
          </div>
          <div class="p-4 pb-0">
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Name group</label>
              <input class="form-control" id="recipient-name" type="text" name="name_group" required>
            </div>
            <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" name="addGroup">Create Group</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="joinGroup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/join-group" method="POST">
        @csrf
        <div class="modal-body p-0">
          <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
            <h4 class="mb-1" id="modalExampleDemoLabel">Join group</h4>
          </div>
          <div class="p-4 pb-0">
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Code group</label>
              <input class="form-control" id="recipient-name" type="text" name="code" required>
            </div>
            <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" name="addGroup">Join Group</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection