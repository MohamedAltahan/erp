<?php

namespace Modules\Admin\Plan\Services;

use Modules\Admin\Plan\Models\Plan;
use Modules\Admin\Tenant\Models\Tenant;
use Modules\Admin\TenantPermission\Models\TenantPermission;
use Modules\Common\Traits\Filterable;

class PlanService
{
    use Filterable;

    public static function getPaginatedPlans($perPage)
    {
        $plans = Plan::paginate($perPage);

        return $plans;
    }

    public static function storePlan($request)
    {
        $permission_ids = $request->input('permission_ids');

        $permissions = TenantPermission::whereIn('id', $permission_ids)->get()->toArray();

        $request->merge(['permissions' => $permissions]);

        $plan = Plan::create($request->all());
        return $plan;
    }

    public static function getPlan($id)
    {
        $plan = Plan::find($id);

        return $plan;
    }

    public static function updatePlan($request, $id)
    {
        $plan = Plan::find($id);
        $plan->update($request->all());

        return $plan;
    }
}
