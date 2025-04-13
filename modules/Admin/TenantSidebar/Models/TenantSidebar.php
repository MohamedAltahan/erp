<?php

namespace Modules\Admin\TenantSidebar\Models;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class TenantSidebar extends BaseTenant
{
    use HasDatabase, HasDomains;

    // protected $fillable = [];
    protected $guarded = [];
}
