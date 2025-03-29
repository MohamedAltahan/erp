<?php

namespace Modules\Erp\Employee\Services;

use Modules\Erp\Common\Enums\EmployeeRoleEnum;
use Modules\Erp\Common\Enums\ImageQuality;
use Modules\Erp\Common\Filters\Search;
use Modules\Erp\Common\Traits\UploadFile;
use Modules\Erp\Employee\Http\Requests\EmployeeRequest;
use Modules\Erp\Employee\Models\Employee;

class EmployeeService
{
    use UploadFile;

    public function getPaginatedEmployees($perPage)
    {
        return Employee::filter([Search::class])->paginate($perPage);
    }

    public function create(EmployeeRequest $request)
    {
        $employeeData = $request->validated();
        $employeeData['avatar'] = $this->uploadFile('avatar', 'avatar', 'public', ImageQuality::Low->value);
        Employee::create($employeeData);
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employeeData = $request->validated();
        $employeeData['avatar'] = $this->fileUpdate('avatar', 'avatar', 'public', $employee->avatar, ImageQuality::Low->value);
        $employee->update($employeeData);
    }

    public function destroy(Employee $employee)
    {
        if ($employee->role == EmployeeRoleEnum::SuperAdmin) {
            return false;
        }

        return $employee->delete();
    }
}
