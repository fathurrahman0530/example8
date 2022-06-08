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
              <a class="btn p-0" href="/form-edit-user/{{ $d->id }}" style="color: black">
                <span class="text-500 fas fa-edit"></span>
              </a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection