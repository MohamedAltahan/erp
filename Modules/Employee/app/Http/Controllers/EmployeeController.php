<?php

namespace Modules\Employee\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\AbstractPaginator;
use Modules\Common\Enums\StatusCodeEnum;
use Modules\Common\Http\Controllers\ApiController;
use Modules\Common\Traits\ApiResponse;
use Modules\Employee\Http\Requests\EmployeeRequest;
use Modules\Employee\Http\Resources\EmployeeResource;
use Modules\Employee\Models\Employee;
use Modules\Employee\Services\EmployeeService;

class EmployeeController extends ApiController
{
    use ApiResponse;

    public function index()
    {
        $employees = Employee::paginate($this->perPage);

        return $this->sendResponse(
            EmployeeResource::paginate($employees),
            'Data fetched successfully',
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
}
