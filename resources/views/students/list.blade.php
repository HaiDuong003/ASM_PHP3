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
                <h1 class="page-header-title">List Students</h1>
            </div>
            {{-- search --}}
            <div class="col-sm-auto">
                <div class="input-group input-group-merge">
                    <form action="{{ route('search-student') }}" method="POST">
                        @csrf
                        <input type="text" class="js-form-search form-control" placeholder="Search..."
                            name="searchStudent">
                        <a class="input-group-append" href="javascript:;">
                            <span class="input-group-text">
                                <i id="clearIcon2" class="tio-clear tio-lg" style="display: none;"></i>
                                <i id="defaultClearIconToggleEg" class="tio-search" style="display: none;"></i>
                            </span>
                        </a>
                    </form>
                </div>
            </div>
            {{-- end search --}}
            <div class="col-sm-auto">
                <a class="btn btn-primary" href="/add_student">
                    <i class="tio-user-add mr-1"></i> Add student
                </a>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <p class="">{{ $searchResult ? 'the result of ' . '"' . $searchResult . '"' . ' is ' : '' }}</p>
    <!-- End Page Header -->
    {{-- Content --}}
    <table id="datatable"
        class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer"
        role="grid">
        <thead class="thead-light">
            {{-- <tr role="row">
                <th class="table-column-pr-0 sorting_disabled" rowspan="1" colspan="1" style="width: 28.575px;">
                    <div class="custom-control custom-checkbox">
                        <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                        <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                </th> --}}
            <th class="sorting" rowspan="1" colspan="1" style="width: 101.175px;">#</th>
            <th class="table-column-pl-0 sorting" rowspan="1" colspan="1" style="width: 223.25px;">
                Name</th>
            <th class="sorting" rowspan="1" colspan="1" style="width: 138.562px;">Gender</th>
            <th class="sorting" rowspan="1" colspan="1" style="width: 124.663px;">Phone</th>
            <th class="sorting" rowspan="1" colspan="1" style="width: 101.175px;">Address</th>
            <th class="sorting" rowspan="1" colspan="1" style="width: 137.65px;">Image
            </th>
            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 70.938px;"></th>
            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 70.938px;"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($listStudent as $key => $student)
                <tr role="row" class="odd">
                    <td>{{ $key += 1 }}</td>
                    <td class="table-column-pl-0">
                        <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">{{ $student->name }}</span>
                        </div>
                    </td>
                    <td>
                        <span class="d-block font-size-sm">{{ $student->gender == 1 ? 'Nam' : 'Nu' }}</span>
                    </td>
                    <td>
                        <span class="d-block font-size-sm">{{ $student->phone }}</span>
                    <td>
                        <span class="d-block font-size-sm">{{ $student->address }}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <span class="font-size-sm mr-2"><img height="75px" width="75px"
                                    src="{{ $student->image ? Storage::url($student->image) : '' }}" alt=""></span>
                        </div>
                    </td>
                    <td>
                        <div>
                            <a class="btn btn-sm btn-white" href="edit_student/{{ $student->id }}">
                                <i class="tio-edit"></i> Edit
                            </a>
                        </div>
                    </td>
                    <td>
                        <div>
                            <a class="btn btn-sm btn-warning" href="delete/student/{{ $student->id }}">
                                <i class="tio-delete"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 15 of 24
        entries</div> --}}
    </div>
    </div>
@endsection
