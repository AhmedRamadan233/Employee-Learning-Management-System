<?php

namespace App\Repository\Eloquent;

use App\Models\Quiz;
use App\Repository\Interfaces\ManagerRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class QuizRepository extends Repository implements ManagerRepositoryInterface
{
    protected Model $model;
    public function __construct(Quiz $model)
    {
        parent::__construct($model);
    }
}
