<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
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


    
});
