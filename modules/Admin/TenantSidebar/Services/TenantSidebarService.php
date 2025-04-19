<?php

namespace Modules\Admin\TenantSidebar\Services;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Arr;
use Modules\Admin\Tenant\Models\Tenant;
use Modules\Admin\TenantSidebar\Filters\Search;
use Modules\Admin\TenantSidebar\Models\TenantSidebar;
use Modules\Common\Filters\Common\JsonNameSearch;
use Modules\Common\Traits\Filterable;

class TenantSidebarService
{
    use Filterable;

    public static function getTenantSidebar(): TenantSidebar
    {
        $sidebar = TenantSidebar::with('children')->whereNull('parent_id')->filter([Search::class])->get();
        return $sidebar;
    }

    public static function getTenantSidebarItem($id): TenantSidebar
    {
        $sidebar = TenantSidebar::where('id', $id)->first();
        return $sidebar;
    }

    public static function updateTenantSidebarItem($request, $id): bool
    {
        $sidebarUpdateStatus = TenantSidebar::where('id', $id)->update($request->Validated());
        return $sidebarUpdateStatus;
    }
}
