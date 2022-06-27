@extends('layouts.app')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-md-3 container-fluid" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<a href="/dashboard" class="btn btn-success btn-sm" style="margin-right: 10px;">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left text-900 fs-3"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
</a>

<a role="button" tabindex="0" href="/add-members" class="btn btn-falcon-primary btn-sm">
  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14 me-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="transform-origin: 0.4375em 0.5em;">
    <g transform="translate(224 256)">
      <g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)">
        <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path>
      </g>
    </g>
  </svg>
  Add Members
</a>

<div class="card mt-3">
  <div class="table-responsive">
    <table id="manageRole" class="table card-table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th class="text-end" scope="col">Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($data as $d)   
        {{-- {{ dd($d) }}  --}}
        <tr>
          <td>{{ $d->fullname }}</td>
          <td>{{ $d->email }}</td>
          <td>
            @if ($d->role == 1)
                {{ 'Pengelola' }}
            @else
                {{ 'Pengguna' }}
            @endif
          </td>
          <td class="text-end">
            <div>
              <a class="btn btn-success" href="/form-edit-user/{{ $d->id }}">
                <i class="fas fa-edit"></i>
              </a>
              @if (Auth::user()->id != $d->id)             
              <a class="btn btn-danger" href="/delete-user/{{ $d->id }}">
                <i class="fas fa-trash"></i>
              </a>
              @endif
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection