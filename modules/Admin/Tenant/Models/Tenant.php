<?php

namespace Modules\Admin\Tenant\Models;

use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    // protected $fillable = [];
    protected $guarded = [];

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'company_name',
            'user_id',
            'subdomain',
            'is_active',
            'version',
            'creating_status',
            'deleted_at',
        ];
    }
}
