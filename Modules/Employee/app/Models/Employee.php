<?php

namespace Modules\Employee\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Common\Enums\EmployeeRoleEnum;

// use Modules\Employee\Database\Factories\EmployeeFactory;

class Employee extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name_ar',
        'name_en',
        'username',
        'branch_id',
        'phone',
        'email',
        'avatar',
        'password',
        'address',
        'role',
    ];

    protected $casts = [
        'role' => EmployeeRoleEnum::class,
        'address' => 'array',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
