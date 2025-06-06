<?php

namespace Modules\Website\User\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Common\Traits\HasPagination;

class UserResource extends JsonResource
{
    use HasPagination;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
            'avatar' => $this->avatar ? asset('storage/'.$this->avatar) : '',
        ];
    }
}
