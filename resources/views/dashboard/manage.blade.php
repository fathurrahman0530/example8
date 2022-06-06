@extends('layouts.app')

@section('content')
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
        <tr>
          <td>Ricky Antony</td>
          <td>ricky@example.com</td>
          <td>Admin</td>
          <td class="text-end">
            <div>
              <button class="btn p-0" type="button" data-bs-toggle="modal" data-bs-target="#error-modal" style="color: black"><span class="text-500 fas fa-edit"></span></button>
              {{-- <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button> --}}
              <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
{{-- Modal --}}
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/create-group" method="POST">
        <div class="modal-body p-0">
          <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
            <h4 class="mb-1" id="modalExampleDemoLabel">Edit User</h4>
          </div>
          <div class="p-4 pb-0">
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Name User</label>
              <input class="form-control" id="recipient-name" type="text" />
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Email User</label>
              <input class="form-control" id="recipient-name" type="text" />
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Role User</label>
              <select class="form-select js-choice" id="organizerSingle" size="1" name="roleUser" data-options='{"removeItemButton":true,"placeholder":true}'>
                <option value="">Select organizer...</option>
                <option>Massachusetts Institute of Technology</option>
                <option>University of Chicago</option>
                <option>GSAS Open Labs At Harvard</option>
                <option>California Institute of Technology </option>
              </select> 
            </div>
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
@endsection