<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Common\Enums\EmployeeRoleEnum;
use Modules\Common\Http\Requests\ApiRequest;

class EmployeeRequest extends ApiRequest
{
    public function rules(): array
    {
        $employee_id = $this->route('employee');

        return [
            // 'name' => ['required', 'array', 'max:255'],
            'name_ar' => [
                'nullable',
                Rule::requiredIf($this->input('name_en') == null),
                'string',
                'max:50',
                'unique:employees,name_ar',
            ],
            'name_en' => [
                'nullable',
                Rule::requiredIf($this->input('name_ar') == null),
                'string',
                'max:50',
                'unique:employees,name_en',
            ],
            'password' => 'required|string|min:2',
            'phone' => ['required', 'string', 'max:20', Rule::unique('employees', 'phone')->ignore($employee_id)],
            'username' => ['required', 'string', 'max:20', Rule::unique('employees', 'username')->ignore($employee_id)],
            'branch_id' => 'integer|required|exists:branches,id',
            'email' => ['nullable', 'email', 'max:50', Rule::unique('employees', 'email')->ignore($employee_id)],
            'role' => ['required', Rule::in(EmployeeRoleEnum::cases())],
            'address' => 'nullable|array|max:300',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'status' => 'boolean', // if not entered it will be true
        ];
    }
}
