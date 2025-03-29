<?php

namespace Modules\Admin\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Erp\Auth\Http\Requests\LoginRequest;
use Modules\Erp\Auth\Services\AuthService;
use Modules\Erp\Common\Enums\StatusCodeEnum;
use Modules\Erp\Common\Http\Controllers\ApiController;
use Modules\Erp\Common\Traits\ApiResponse;
use Modules\Erp\Employee\Http\Resources\EmployeeResource;

class AuthController extends ApiController
{
    use ApiResponse;

    public function login(LoginRequest $request, AuthService $authService)
    {
        $user = $authService->login($request);

        if (! $user) {
            return $this->sendResponse(
                [],
                __('Invalid username or password'),
                StatusCodeEnum::Unauthorized->value
            );
        }

        return $this->sendResponse(
            [
                'user' => EmployeeResource::make($user),
                'token' => $user->createToken('auth_token')->plainTextToken,
            ],
            __('Loged in successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->sendResponse([], __('Loged out successfully'), StatusCodeEnum::Success->value);
    }
}
