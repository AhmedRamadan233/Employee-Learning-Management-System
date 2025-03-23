<?php

namespace App\Http\Controllers\Dashboard\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Courses\CourseRequest;
use App\Services\Dashboard\Courses\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct(private CourseService $service) {}


    public function index()
    {
        return $this->service->index();
    }

    public function create()
    {
        return $this->service->create();
    }
    public function store(CourseRequest $request)
    {
        return $this->service->store($request);
    }
}
