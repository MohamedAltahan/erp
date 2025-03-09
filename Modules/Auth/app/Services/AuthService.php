<?php

namespace Modules\Auth\Services;

use Illuminate\Support\Facades\Auth;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Http\Requests\RegisterRequest;
use Modules\Employee\Models\Employee;

class AuthService
{
    public static function login(LoginRequest $request)
    {
        if (Auth::guard('web')->attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            $user = Auth::user();
            return $user;
        } else {
            return false;
        }
    }
}
