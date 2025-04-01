<?php

namespace Modules\Website\User\Models;

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

class User extends Authenticatable
{
    use HasApiTokens, HasRoles, Notifiable;
    use Filterable;
    use HasFactory;
    use HasTranslations;

    protected $translatable = ['address'];

    protected $fillable = [
        'name',
        'username',
        'phone',
        'email',
        'avatar',
        'password',
        'address',
        'status',
        'company_name',
    ];

    protected $casts = [
        'address' => 'array',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
