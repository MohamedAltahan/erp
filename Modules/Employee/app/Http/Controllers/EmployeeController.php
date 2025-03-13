<?php

namespace Modules\Employee\Http\Controllers;

use Modules\Common\Enums\EmployeeRoleEnum;
use Modules\Common\Enums\StatusCodeEnum;
use Modules\Common\Http\Controllers\ApiController;
use Modules\Common\Traits\ApiResponse;
use Modules\Common\Traits\UploadFile;
use Modules\Employee\Http\Requests\EmployeeRequest;
use Modules\Employee\Http\Resources\EmployeeResource;
use Modules\Employee\Models\Employee;
use Modules\Employee\Services\EmployeeService;

class EmployeeController extends ApiController
{
    use ApiResponse, UploadFile;

    public function index()
    {
        $employees = Employee::paginate($this->perPage);

        return $this->sendResponse(
            EmployeeResource::paginate($employees),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function store(EmployeeRequest $request, EmployeeService $employeeService)
    {
        $employeeService->create($request);

        return $this->sendResponse(
            [],
            __('Data created successfully'),
            StatusCodeEnum::Created_successfully->value
        );
    }

    public function show(Employee $employee)
    {
        return $this->sendResponse(
            EmployeeResource::make($employee),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function update(EmployeeRequest $request, Employee $employee, EmployeeService $employeeService)
    {
        $employeeService->update($request, $employee);

        return $this->sendResponse(
            [],
            __('Data updated successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function destroy(Employee $employee)
    {
        if ($employee->role == EmployeeRoleEnum::SuperAdmin) {
            return $this->sendResponse(
                [],
                __('Super admin can not be deleted'),
                StatusCodeEnum::Success->value
            );
        }

        $employee->delete();

        return $this->sendResponse(
            [],
            __('Data deleted successfully'),
            StatusCodeEnum::Success->value
        );
    }
}
