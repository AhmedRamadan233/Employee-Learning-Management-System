<?php

namespace App\Repository\Eloquent;

use App\Models\Quiz;
use App\Repository\Interfaces\ManagerRepositoryInterface;
use App\Repository\Interfaces\QuizRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class QuizRepository extends Repository implements QuizRepositoryInterface
{

    protected Model $model;
    public function __construct(Quiz $model)
    {
        parent::__construct($model);
    }
}
