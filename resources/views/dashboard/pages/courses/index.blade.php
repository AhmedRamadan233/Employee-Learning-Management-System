@extends('dashboard.master.master')

@section('content')
    <div class="container-fluid p-5 ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline shadow">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="card-header">

                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h3 class="card-title">Courses Lists</h3>

                            <a href="{{ route('courses.create') }}" class="btn btn-primary">
                                Add new Course
                            </a>
                        </div>

                    </div>

                    <div class="card-body">
                        <table id="categories-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Slug</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($courses as $course)
                                    <tr>
                                        <td class="text-center">{{ $course->id }}</td>
                                        <td class="text-center">{{ $course->title }}</td>
                                        <td class="text-center">{{ $course->description ?? 'No Description' }}</td>
                                        <td class="text-center">{{ $course->slug }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('courses.edit', $course->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No courses available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $courses->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('AjaxScripts')
@endpush
