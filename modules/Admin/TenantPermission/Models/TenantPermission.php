<?php

namespace Modules\Admin\TenantPermission\Models;

use Modules\Common\Models\BaseModel;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class TenantPermission extends BaseModel
{
    use HasDatabase, HasDomains;

    // protected $fillable = [];
    protected $guarded = [];

    protected $casts = [
        'title' => 'array'
    ];
}
