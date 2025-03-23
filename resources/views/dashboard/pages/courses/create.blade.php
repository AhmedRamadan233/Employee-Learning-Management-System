@extends('dashboard.master.master')

@section('content')
    <div class="container-fluid p-5 ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline shadow">
                    <div class="card-header">

                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h3 class="card-title">Create Course</h3>
                        </div>

                    </div>

                    <div class="card-body">

                        <x-form.form-component :route="route('courses.store')" method="POST">

                            {{-- users details --}}
                            <h4>Register User</h4>
                            <x-input.input-field name="name" type="text" label="User Name"
                                placeholder="Enter user name" />

                            <x-input.input-field name="email" type="email" label="User Email"
                                placeholder="Enter user email" />

                            <x-input.input-field name="password" type="password" label="Password"
                                placeholder="Enter password" />

                            {{-- courses data --}}
                            <h4>Course Information</h4>
                            <x-input.input-field name="title" type="text" label="Course Title"
                                placeholder="Enter course title" />

                            <div class="row">
                                <x-input.text-area name="description" label="Course Description"
                                    placeholder="Enter course description" wrapperClass="col-md-12 mb-3" />
                            </div>
                        </x-form.form-component>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('AjaxScripts')
@endpush
{{-- <x-input.input-field name="image" type="file" label="{{ __('dashboard.Image') }}"
                                 /> --}}
