<?php

namespace Modules\Auth\Http\Requests;

use Modules\Common\Http\Requests\ApiRequest;

class AuthRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'username' => 'required|string|max:20|unique:employees,username',
            'password' => 'required|string|min:2',
            'branch_id' => 'required|exists:branches,id',
        ];
    }
}
