<?php

namespace Modules\Employee\Services;

use Modules\Common\Enums\EmployeeRoleEnum;
use Modules\Common\Enums\ImageQuality;
use Modules\Common\Filters\Search;
use Modules\Common\Traits\UploadFile;
use Modules\Employee\Http\Requests\EmployeeRequest;
use Modules\Employee\Models\Employee;

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
