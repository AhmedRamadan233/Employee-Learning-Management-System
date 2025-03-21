<?php

namespace App\Repository\Eloquent;

use App\Models\Question;
use App\Repository\Interfaces\ManagerRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
class QuestionRepository extends Repository implements ManagerRepositoryInterface
{
    protected Model $model;
    public function __construct(Question $model)
    {
        parent::__construct($model);
    }
}
