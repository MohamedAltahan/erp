<?php

namespace Modules\Erp\Employee\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Erp\Common\Enums\EmployeeRoleEnum;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Erp\Common\Traits\Filterable;
use Modules\Erp\Common\Traits\HasLocalizedName;
use Spatie\Translatable\HasTranslations;
// use Modules\Erp\Employee\Database\Factories\EmployeeFactory;

class Employee extends Authenticatable
{
    use HasApiTokens, HasRoles, Notifiable;
    use Filterable;
    use HasFactory;
    use HasLocalizedName;
    use HasTranslations;

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
