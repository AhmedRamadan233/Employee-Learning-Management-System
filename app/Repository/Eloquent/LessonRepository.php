<?php

namespace App\Repository\Eloquent;

use App\Models\Lesson;
use App\Repository\Interfaces\ManagerRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
class LessonRepository extends Repository implements ManagerRepositoryInterface
{
    protected Model $model;
    public function __construct(Lesson $model)
    {
        parent::__construct($model);
    }
}
