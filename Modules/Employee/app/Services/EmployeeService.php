<?php

namespace Modules\Employee\Services;

use Illuminate\Support\Facades\Auth;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Http\Requests\RegisterRequest;
use Modules\Employee\Http\Requests\EmployeeRequest;
use Modules\Employee\Models\Employee;

class EmployeeService
{
    public static function create(EmployeeRequest $request)
    {
        Employee::create($request->validated());
    }
}
