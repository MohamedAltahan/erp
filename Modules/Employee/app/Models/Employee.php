<?php

namespace Modules\Employee\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Common\Enums\EmployeeRoleEnum;
use Modules\Common\Traits\Filterable;
use Modules\Common\Traits\HasLocalizedName;
use Spatie\Translatable\HasTranslations;

// use Modules\Employee\Database\Factories\EmployeeFactory;

class Employee extends Authenticatable
{
    use Filterable, HasApiTokens, HasLocalizedName, HasTranslations, Notifiable;

    protected $translatable = ['description', 'address'];

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
        'status',
    ];

    protected $casts = [
        'name' => 'array',
        'role' => EmployeeRoleEnum::class,
        'address' => 'array',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
