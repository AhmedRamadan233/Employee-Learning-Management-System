<?php

use App\Http\Controllers\Dashboard\Answers\AnswerController;
use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\Courses\CourseController;
use App\Http\Controllers\Dashboard\Lessons\LessonController;
use App\Http\Controllers\Dashboard\Questions\QuestionController;
use App\Http\Controllers\Dashboard\Quizzes\QuizController;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'auth', 'as' => 'auth.'], function (): void {
    Route::get('login', [AuthController::class, '_login'])->name('_login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('index');
    })->name('/');

    Route::controller(CourseController::class)->prefix('courses')->name('courses.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/destory',  'destroy')->name('destroy');
        });
    Route::controller(LessonController::class)->prefix('lessons')->name('lessons.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/destory',  'destroy')->name('destroy');
        });
    Route::controller(QuizController::class)->prefix('quizzes')->name('quizzes.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/destory',  'destroy')->name('destroy');
        });
    Route::controller(QuestionController::class)->prefix('questions')->name('questions.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/destory',  'destroy')->name('destroy');
        });
    Route::controller(AnswerController::class)->prefix('answers')->name('answers.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/destory',  'destroy')->name('destroy');
        });
});
