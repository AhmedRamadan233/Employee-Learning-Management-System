<?php

namespace App\Services\Dashboard\Courses;

use App\Repository\Interfaces\CourseRepositoryInterface;

class CourseService
{
    public function __construct(
        private CourseRepositoryInterface $repository,
    ) {}
}
