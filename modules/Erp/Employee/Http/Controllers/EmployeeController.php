<?php

namespace Modules\Erp\Employee\Http\Controllers;

use Modules\Erp\Common\Enums\StatusCodeEnum;
use Modules\Erp\Common\Http\Controllers\ApiController;
use Modules\Erp\Common\Traits\ApiResponse;
use Modules\Erp\Employee\Http\Requests\EmployeeRequest;
use Modules\Erp\Employee\Http\Resources\EmployeeResource;
use Modules\Erp\Employee\Models\Employee;
use Modules\Erp\Employee\Services\EmployeeService;

class EmployeeController extends ApiController
{
    use ApiResponse;

    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        parent::__construct();
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getPaginatedEmployees($this->perPage);

        return $this->sendResponse(
            EmployeeResource::paginate($employees),
            __('Data fetched successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function store(EmployeeRequest $request)
    {
        $this->employeeService->create($request);

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

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $this->employeeService->update($request, $employee);

        return $this->sendResponse(
            [],
            __('Data updated successfully'),
            StatusCodeEnum::Success->value
        );
    }

    public function destroy(Employee $employee)
    {
        $deleted = $this->employeeService->destroy($employee);

        if (! $deleted) {
            return $this->sendResponse(
                [],
                __('Super admin can not be deleted'),
                StatusCodeEnum::Success->value
            );
        }

        return $this->sendResponse(
            [],
            __('Data deleted successfully'),
            StatusCodeEnum::Success->value
        );
    }
}
