<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Common\Enums\EmployeeRoleEnum;
use Modules\Common\Http\Requests\ApiRequest;

class EmployeeRequest extends ApiRequest
{
    public function rules(): array
    {
        return [

            'name_ar' => [
                'nullable',
                Rule::requiredIf($this->input('name_en') == null),
                'string',
                'max:50',
            ],
            'name_en' => [
                'nullable',
                Rule::requiredIf($this->input('name_ar') == null),
                'string',
                'max:50',
            ],
            'password' => 'required|string|min:2',
            'phone' => 'required|string|max:20|unique:employees,phone',
            'username' => 'required|string|max:20|unique:employees,username',
            'branch_id' => 'integer|required|exists:branches,id',
            'email' => 'nullable|email|max:50|unique:employees,email',
            'role' => ['required', Rule::in(EmployeeRoleEnum::cases())],
            'address' => 'nullable|array|max:300',
        ];
    }
}
