<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Common\Enums\EmployeeRoleEnum;
use Modules\Employee\Models\Employee;

class EmployeeDatabaseSeeder extends Seeder
{

    public function run(): void
    {
        Employee::create([
            'id' => 1,
            'name' => 'Admin',
            'username' => 'admin',
            'branch_id' => 1,
            'role' => EmployeeRoleEnum::Admin,
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
