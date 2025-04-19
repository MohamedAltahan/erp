<?php

namespace Modules\Admin\TenantSidebar\Models;

use Modules\Common\Models\BaseModel;
use Spatie\Translatable\HasTranslations;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class TenantSidebar extends BaseModel
{
    public $translatable = ['name'];
    // protected $fillable = [];
    protected $guarded = [];


    public function children()
    {
        return $this->hasMany(TenantSidebar::class, 'parent_id');
    }
}
