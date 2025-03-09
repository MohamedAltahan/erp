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
            'name_ar' => 'الفرع الرئيسي',
            'name_en' => 'main branch',
            'description' => ['en' => 'main branch', 'ar' => 'الفرع الرئيسي'],
            'address' => ['en' => 'main branch', 'ar' => 'الفرع الرئيسي'],
            'note' => ['en' => 'main branch', 'ar' => 'الفرع الرئيسي'],
            'phone' => '01000000000',
        ]);
    }
}
