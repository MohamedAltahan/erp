<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Branch\Models\Branch;

class BranchSeeder extends Seeder
{
    public function run(): void
    {
        Branch::create([
            'id' => 1,
            'name_en' => 'main branch',
            'name_ar' => 'الفرع الرئيسي',
            'description' => ['en' => 'main branch', 'ar' => 'الفرع الرئيسي'],
            'address' => ['en' => 'main branch', 'ar' => 'الفرع الرئيسي'],
            'phone' => '01000000000',
        ]);
    }
}
