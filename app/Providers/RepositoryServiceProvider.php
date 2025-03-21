<?php

namespace App\Providers;

use App\Repository\Eloquent\AnswerRepository;
use App\Repository\Eloquent\CourseRepository;
use App\Repository\Eloquent\LessonRepository;
use App\Repository\Eloquent\ManagerRepository;
use App\Repository\Eloquent\QuestionRepository;
use App\Repository\Eloquent\QuizRepository;
use App\Repository\Eloquent\Repository;
use App\Repository\Eloquent\UserRepository;
use App\Repository\Interfaces\AnswerRepositoryInterface;
use App\Repository\Interfaces\CourseRepositoryInterface;
use App\Repository\Interfaces\LessonRepositoryInterface;
use App\Repository\Interfaces\ManagerRepositoryInterface;
use App\Repository\Interfaces\QuestionsRepositoryInterface;
use App\Repository\Interfaces\QuizRepositoryInterface;
use App\Repository\Interfaces\RepositoryInterface;
use App\Repository\Interfaces\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(RepositoryInterface::class, Repository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(ManagerRepositoryInterface::class, ManagerRepository::class);
        $this->app->singleton(CourseRepositoryInterface::class, CourseRepository::class);
        $this->app->singleton(LessonRepositoryInterface::class, LessonRepository::class);
        $this->app->singleton(QuizRepositoryInterface::class, QuizRepository::class);
        $this->app->singleton(QuestionsRepositoryInterface::class, QuestionRepository::class);
        $this->app->singleton(AnswerRepositoryInterface::class, AnswerRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
