<?php

namespace Modules\Auth\Http\Requests;

use Modules\Common\Http\Requests\ApiRequest;

class AuthRequest extends ApiRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'username' => 'required|string|max:20|unique:users,username',
            'password' => 'required',
        ];
    }
}
