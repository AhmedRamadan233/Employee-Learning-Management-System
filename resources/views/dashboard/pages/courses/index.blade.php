@extends('dashboard.master.master')

@section('content')
    <div class="container-fluid p-5 ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline shadow">
                    <div class="card-header">

                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h3 class="card-title"></h3>

                            <button type="button" class="btn btn-primary">
                                Add new Course
                            </button>
                        </div>

                    </div>

                    <div class="card-body">

                        <table id="categories-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>

                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($courses as $course) --}}
                                <tr>

                                    <td class="text-center">d</td>
                                    <td class="text-center">d</td>

                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('AjaxScripts')
@endpush
