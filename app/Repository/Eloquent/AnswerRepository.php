<?php

namespace App\Repository\Eloquent;

use App\Models\Answer;
use App\Repository\Interfaces\AnswerRepositoryInterface;
use App\Repository\Interfaces\ManagerRepositoryInterface;
use Illuminate\Console\View\Components\Ask;
use Illuminate\Database\Eloquent\Model;

class AnswerRepository extends Repository implements AnswerRepositoryInterface
{
    protected Model $model;
    public function __construct(Answer $model)
    {
        parent::__construct($model);
    }
}
