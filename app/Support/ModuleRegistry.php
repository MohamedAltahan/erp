<?php

namespace App\Support;

class ModuleRegistry
{
    public static function erp(): array
    {
        return [
            'Auth',
            'Branch',
            'AccountTree',
            'Employee',
        ];
    }

    public static function website(): array
    {
        return [
            'User',
        ];
    }

    public static function admin(): array
    {
        return [
            'Tenant',
        ];
    }
}
