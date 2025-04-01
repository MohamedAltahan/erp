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
            'User',
        ];
    }

    public static function website(): array
    {
        return [
            'User',
            'Auth',
        ];
    }

    public static function admin(): array
    {
        return [
            'Auth',
            'Tenant',
        ];
    }
}
