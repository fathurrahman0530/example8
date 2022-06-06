@extends('layouts.app')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-md-3 container-fluid" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h1 class="d-flex justify-content-center" style="margin-top: 150px">Welcome Group Chat Application</h1>
@endsection
