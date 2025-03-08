<?php

namespace Modules\Employee\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Common\Enums\EmployeeRoleEnum;
use Illuminate\Database\Eloquent\Casts\AsPassword;
// use Modules\Employee\Database\Factories\EmployeeFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'branch_id',
        'phone',
        'email',
        'password',
        'address',
        'role'
    ];

    protected $casts = [
        'role' => EmployeeRoleEnum::class,
    ];
}
