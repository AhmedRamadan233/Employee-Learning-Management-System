<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Auth\LoginRequest;
use App\Services\Dashboard\Auth\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct(private AuthService $service) {}



    public function _login()
    {
        return view('dashboard.auth.login');
    }

    public function login(LoginRequest $request)
    {
        return $this->service->login($request);
    }

    public function logout()
    {
        return $this->service->logout();
    }
}
