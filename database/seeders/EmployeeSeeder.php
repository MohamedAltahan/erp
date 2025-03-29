<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Erp\Common\Enums\EmployeeRoleEnum;
use Modules\Erp\Employee\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create([
            'id' => 1,
            'name_en' => 'admin',
            'name_ar' => 'ادمن',
            'username' => 'admin',
            'branch_id' => 1,
            'role' => EmployeeRoleEnum::SuperAdmin,
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
