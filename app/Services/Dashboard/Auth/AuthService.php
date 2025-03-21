<?php

namespace App\Services\Dashboard\Auth;

use App\Http\Requests\Dashboard\Auth\LoginRequest;
use App\Models\Manager;
use App\Repository\Interfaces\ManagerRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    // public function __construct(
    //     private ManagerRepositoryInterface $repository,
    // ) {}
    public function login(LoginRequest $request)
    {

        $credentials = $request->validated();
        if (auth()->attempt($credentials)) {
            return redirect()->route('/');
        } else {
            return redirect()->route('auth.login')->with(['error' => 'Incorrect email or password']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.login');
    }
}
