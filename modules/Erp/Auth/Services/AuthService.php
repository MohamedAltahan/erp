<?php

namespace Modules\Erp\Auth\Services;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Modules\Common\Enums\GuardEnum;
use Modules\Erp\Auth\Http\Requests\LoginRequest;

class AuthService
{
    public static function login(LoginRequest $request)
    {
        $guard = Auth::guard(GuardEnum::erpSession->value);

        if ($guard->attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {

            $user = $guard->user();
            return $user;
        } else {
            return false;
        }
    }
}
