<?php

namespace Modules\Admin\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Common\Enums\UserRoleEnum;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Common\Traits\Filterable;
use Modules\Common\Traits\HasLocalizedName;
use Spatie\Translatable\HasTranslations;
// use Modules\Erp\User\Database\Factories\UserFactory;

class Admin extends Authenticatable
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
        'role' => UserRoleEnum::class,
        'address' => 'array',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
