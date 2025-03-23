<?php

namespace App\Repository\Eloquent;

use App\Models\Lesson;
use App\Repository\Interfaces\LessonRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
class LessonRepository extends Repository implements LessonRepositoryInterface
{
    protected Model $model;
    public function __construct(Lesson $model)
    {
        parent::__construct($model);
    }
}
