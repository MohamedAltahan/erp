<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Admin\Models\Admin;
use Modules\Admin\TenantSidebar\Models\TenantSidebar;
use Modules\Common\Enums\UserRoleEnum;
use Modules\Erp\User\Models\User;

class TenantSidebarSeeder extends Seeder
{
    public function run(): void
    {
        $sidebarItems = config('TenantSidebar');

        foreach ($sidebarItems as $sidebarItem) {
            $parent = TenantSidebar::updateOrCreate([
                'name' => $sidebarItem['name'],
                'slug' => $sidebarItem['slug'],
                'route' => $sidebarItem['route'],
                'parent_id' => $sidebarItem['parent_id'],
                'icon' => $sidebarItem['icon'],
                'is_active' => $sidebarItem['is_active'],
                'order' => $sidebarItem['order'],
            ]);

            foreach ($sidebarItem['children'] as $child) {
                TenantSidebar::updateOrCreate([
                    'name' => $child['name'],
                    'slug' => $child['slug'],
                    'route' => $child['route'],
                    'parent_id' => $parent->id,
                    'icon' => $child['icon'],
                    'is_active' => $child['is_active'],
                    'order' => $child['order'],
                ]);
            }
        }
    }
}
