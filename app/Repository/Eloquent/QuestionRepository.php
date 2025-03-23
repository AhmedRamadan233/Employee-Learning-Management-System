<?php

namespace App\Repository\Eloquent;

use App\Models\Question;
use App\Repository\Interfaces\QuestionsRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
class QuestionRepository extends Repository implements QuestionsRepositoryInterface
{
    protected Model $model;
    public function __construct(Question $model)
    {
        parent::__construct($model);
    }
}
