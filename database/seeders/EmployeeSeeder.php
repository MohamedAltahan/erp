<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Common\Enums\EmployeeRoleEnum;
use Modules\Employee\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create([
            'id' => 1,
            'name' => ['en' => 'main branch', 'ar' => 'الفرع الرئيسي'],
            'username' => 'admin',
            'branch_id' => 1,
            'role' => EmployeeRoleEnum::SuperAdmin,
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
