<?php

namespace Modules\Branch\Services;

use Modules\Common\Enums\ImageQuality;
use Modules\Common\Traits\UploadFile;
use Modules\Employee\Http\Requests\EmployeeRequest;
use Modules\Employee\Models\Employee;

class BranchService
{

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
}
