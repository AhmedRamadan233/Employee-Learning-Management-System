<?php

namespace App\Repository\Eloquent;

use App\Models\Course;
use App\Repository\Interfaces\ManagerRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CourseRepository extends Repository implements ManagerRepositoryInterface
{
    protected Model $model;
    public function __construct(Course $model)
    {
        parent::__construct($model);
    }
}
