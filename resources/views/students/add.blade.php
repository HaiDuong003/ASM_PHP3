@extends('templates.layout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Students</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>

                <h1 class="page-header-title">Users</h1>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->
    <form action="{{ route('add-student') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
        <label>Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="1">
            <label class="form-check-label">
                Nam
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="2">
            <label class="form-check-label">
                Nu
            </label>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Address" name="address">
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-1">ADD</button>
    </form>
@endsection
