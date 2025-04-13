<?php

return [
    [
        'name' => ['ar' => 'النظام المحاسبي', 'en' => 'Accountant System'],
        'slug'  => 'accountant_system',
        'route' => '/accountant-system',
        'icon'  => 'accountant_system',
        'sort'  => 1,
        'children' => [
            [
                'name'       => ['ar' => 'الدليل المحاسبي', 'en' => 'Accounts Tree'],
                'slug'        => 'accounts_tree',
                'route'       => '/accounts-tree',
                'icon'        => 'accounts_tree',
                'sort'        => 1,
            ],
            [
                'name'       => ['ar' => 'روابط الحسابات', 'en' => 'Accounts Links'],
                'slug'        => 'accounts_links',
                'route'       => '/accounts-links',
                'icon'        => 'accounts_links',
                'sort'        => 2,
            ],
            [
                'name'       => ['ar' => 'ربط الحسابات', 'en' => 'Accounts To Links'],
                'slug'        => 'accounts_to_link',

                'route'       => '/accounts-to-link',
                'icon'        => 'accounts_to_link',
                'sort'        => 3,
            ],
            [
                'name'       => ['ar' => 'أنواع الحسابات', 'en' => 'Accounts Type'],
                'slug'        => 'accounts_type',

                'route'       => '/accounts-type',
                'icon'        => 'accounts_type',
                'sort'        => 4,
            ],
            [
                'name'       => ['ar' => 'رصيد الحسابات الأولى', 'en' => 'Accounting Initial Balance'],
                'slug'        => 'accounting_initial_balance',

                'route'       => '/accounting_initial_balance',
                'icon'        => 'accounting_initial_balance',
                'sort'        => 5,
            ],
            [
                'name'       => ['ar' => 'القيود المحاسبيه', 'en' => 'Accounting Restriction'],
                'slug'        => 'accounting_restriction',

                'route'       => '/accounting-restrictions',
                'icon'        => 'accounting_restriction',
                'sort'        => 6,
            ],
            [
                'name'       => ['ar' => 'السندات', 'en' => 'Vouchers'],
                'slug'        => 'vouchers',

                'route'       => '/vouchers',
                'icon'        => 'vouchers',
                'sort'        => 7,
            ],
            [
                'name'       => ['ar' => 'أقسام القوائم المالية', 'en' => 'Financial Lists Sections'],
                'slug'        => 'financial_statements_settings',

                'route'       => '/financial-list-sections',
                'icon'        => 'financial_statements_settings',
                'sort'        => 6, // already an integer in your data, left as-is
            ],
            [
                'name'       => ['ar' => 'المعادلات المالية', 'en' => 'Financial Equation'],
                'slug'        => 'financial_equation',

                'route'       => '/financial-equations',
                'icon'        => 'financial_equation',
                'sort'        => 2,
            ],
            [
                'name'       => ['ar' => 'السنوات المالية', 'en' => 'Financial Years'],
                'slug'        => 'financial_year',

                'route'       => '/financial-financial_years',
                'icon'        => 'financial_year',
                'sort'        => 8,
            ],
        ],
    ],
    [
        'name' => ['ar' => 'نظام المخازن', 'en' => 'Warehouses System'],
        'slug'  => 'warehouses_system',
        'route' => '/accountant-system',
        'icon'  => 'accountant_system',
        'sort'  => 2,
        'children' => [
            [
                'name'       => ['ar' => 'رصيد المخزون الأولى', 'en' => 'Stock Initial Balance'],
                'slug'        => 'stock_initial_balance',

                'route'       => '/stock_initial_balance',
                'icon'        => 'stock_initial_balance',
                'sort'        => 1,
            ],
            [
                'name'       => ['ar' => 'المخازن', 'en' => 'Inventories'],
                'slug'        => 'inventories',

                'route'       => '/inventories',
                'icon'        => 'inventories',
                'sort'        => 2,
            ],
            [
                'name'       => ['ar' => 'أقسام المنتجات', 'en' => 'Categories'],
                'slug'        => 'categories',

                'route'       => '/categories',
                'icon'        => 'categories',
                'sort'        => 3,
            ],
            [
                'name'       => ['ar' => 'المنتجات', 'en' => 'Products'],
                'slug'        => 'products',

                'route'       => '/products',
                'icon'        => 'products',
                'sort'        => 4,
            ],
            [
                'name'       => ['ar' => 'وحدات المنتجات', 'en' => 'Product Units'],
                'slug'        => 'product_units',

                'route'       => '/product-units',
                'icon'        => 'product_units',
                'sort'        => 5,
            ],
            [
                'name'       => ['ar' => 'الطاولات', 'en' => 'Tables'],
                'slug'        => 'tables',

                'route'       => '/tables',
                'icon'        => 'tables',
                'sort'        => 6,
            ],
            [
                'name'       => ['ar' => 'طلبات التحويل', 'en' => 'Inventory Transfer Requests'],
                'slug'        => 'inventory_transfer_requests',

                'route'       => '/inventory-transfer-requests',
                'icon'        => 'inventory_transfer_requests',
                'sort'        => 7,
            ],
            [
                'name'       => ['ar' => 'طلبات تحويل المخزون الخاصه بى', 'en' => 'My Transfer Requests'],
                'slug'        => 'my_inventory_transfer_requests',

                'route'       => '/my-inventory-transfer-requests',
                'icon'        => 'my_inventory_transfer_requests',
                'sort'        => 8,
            ],
            [
                'name'       => ['ar' => 'تحويلات المخازن', 'en' => 'Inventory Transfer'],
                'slug'        => 'inventory_transfers',

                'route'       => '/inventory-transfers',
                'icon'        => 'inventory_transfers',
                'sort'        => 9,
            ],
            [
                'name'       => ['ar' => 'سجل المخزون', 'en' => 'Stock History'],
                'slug'        => 'stock_history',

                'route'       => '/stock-history',
                'icon'        => 'stock_history',
                'sort'        => 10,
            ],
            [
                'name'       => ['ar' => 'السندات المخزنية', 'en' => 'Inventory Vouchers'],
                'slug'        => 'inventory_vouchers',

                'route'       => '/inventory-vouchers',
                'icon'        => 'inventory_vouchers',
                'sort'        => 11,
            ],
        ],
    ],
    [
        'name' => ['ar' => 'نظام المبيعات', 'en' => 'Sales System'],
        'slug'  => 'sales_system',
        'route' => '/accountant-system',
        'icon'  => 'accountant_system',
        'sort'  => 3,
        'children' => [
            [
                'name'       => ['ar' => 'فواتير المبيعات', 'en' => 'Sales Invoices'],
                'slug'        => 'sales',

                'route'       => '/sales',
                'icon'        => 'sales',
                'sort'        => 1,
            ],
            [
                'name'       => ['ar' => 'مرتجع المبيعات', 'en' => 'Refund Sales'],
                'slug'        => 'refund_sales',

                'route'       => '/refund-sales',
                'icon'        => 'refund_sales',
                'sort'        => 2,
            ],
        ],
    ],
    [
        'name' => ['ar' => 'نظام العملاء', 'en' => 'Customers System'],
        'slug'  => 'customers_system',
        'route' => '/accountant-system',
        'icon'  => 'accountant_system',
        'sort'  => 4,
        'children' => [
            [
                'name'       => ['ar' => 'العملاء', 'en' => 'Customers'],
                'slug'        => 'customers',

                'route'       => '/customers',
                'icon'        => 'customers',
                'sort'        => 1,
            ],
        ],
    ],
    [
        'name' => ['ar' => 'نظام المشتريات', 'en' => 'Purchases System'],
        'slug'  => 'purchases_system',
        'route' => '/accountant-system',
        'icon'  => 'accountant_system',
        'sort'  => 5,
        'children' => [
            [
                'name'       => ['ar' => 'فواتير المشتريات', 'en' => 'Purchases Invoices'],
                'slug'        => 'purchases',

                'route'       => '/purchases',
                'icon'        => 'purchases',
                'sort'        => 1,
            ],
            [
                'name'       => ['ar' => 'مرتجع المشتريات', 'en' => 'Refund Purchase'],
                'slug'        => 'refund_purchases',

                'route'       => '/refund-purchases',
                'icon'        => 'purchases',
                'sort'        => 2,
            ],
        ],
    ],
    [
        'name' => ['ar' => 'نظام الموردين', 'en' => 'Providers System'],
        'slug'  => 'providers_system',
        'route' => '/accountant-system',
        'icon'  => 'accountant_system',
        'sort'  => 6,
        'children' => [
            [
                'name'       => ['ar' => 'الموردين', 'en' => 'Providers'],
                'slug'        => 'providers',

                'route'       => '/providers',
                'icon'        => 'providers',
                'sort'        => 1,
            ],
        ],
    ],
    [
        'name' => ['ar' => 'نظام التقارير', 'en' => 'Reporting System'],
        'slug'  => 'reporting_system',
        'route' => '/accountant-system',
        'icon'  => 'accountant_system',
        'sort'  => 7,
        'children' => [
            [
                'name'       => ['ar' => 'تقارير الحسابات', 'en' => 'Accounts Reports'],
                'slug'        => 'accounts_reports',

                'route'       => '/accounts-reports',
                'icon'        => 'accounts_reports',
                'sort'        => 1,
            ],
            [
                'name'       => ['ar' => 'التقارير الضريبية', 'en' => 'Taxes Reports'],
                'slug'        => 'taxes_reports',

                'route'       => '/taxes-reports',
                'icon'        => 'taxes_reports',
                'sort'        => 2,
            ],
            [
                'name'       => ['ar' => 'التقارير العامة', 'en' => 'General Reports'],
                'slug'        => 'general_reports',

                'route'       => '/general-reports',
                'icon'        => 'general_reports',
                'sort'        => 2,
            ],
            [
                'name'       => ['ar' => 'قائمة الدخل', 'en' => 'Income List'],
                'slug'        => 'income_list',

                'route'       => '/income-list',
                'icon'        => 'income_list',
                'sort'        => 2,
            ],
            [
                'name'       => ['ar' => 'قائمة المركز المالي', 'en' => 'Statement of Financial Position'],
                'slug'        => 'statement_of_financial_position',

                'route'       => '/statement-of-financial-position',
                'icon'        => 'statement_of_financial_position',
                'sort'        => 5,
            ],
        ],
    ],
    [
        'name' => ['ar' => 'الإعدادات', 'en' => 'Settings'],
        'slug'  => 'settings',
        'route' => '/accountant-system',
        'icon'  => 'accountant_system',
        'sort'  => 8,
        'children' => [
            [
                'name'       => ['ar' => 'مراكز التكلفة', 'en' => 'Cost Centers'],
                'slug'        => 'cost_centers',

                'route'       => '/cost-centers',
                'icon'        => 'cost_center',
                'sort'        => 9,
            ],
            [
                'name'       => ['ar' => 'القائمة الجانبية', 'en' => 'Sidebar'],
                'slug'        => 'sidebar',

                'route'       => '/sidebar',
                'icon'        => 'sidebar',
                'sort'        => 2,
            ],
            [
                'name'       => ['ar' => 'ادوار المستخدمين', 'en' => 'Roles'],
                'slug'        => 'roles',

                'route'       => '/roles',
                'icon'        => 'roles',
                'sort'        => 4,
            ],
            [
                'name'       => ['ar' => 'المستخدمين', 'en' => 'Users'],
                'slug'        => 'users',

                'route'       => '/users',
                'icon'        => 'users',
                'sort'        => 5,
            ],
            [
                'name'       => ['ar' => 'أنشطة المستخدمين', 'en' => 'Users Activities'],
                'slug'        => 'action-event',

                'route'       => '/action-event',
                'icon'        => 'user-activity',
                'sort'        => 5,
            ],
            [
                'name'       => ['ar' => 'إدارة الضرائب', 'en' => 'Tax Management'],
                'slug'        => 'taxes',

                'route'       => '/taxes',
                'icon'        => 'taxes',
                'sort'        => 5,
            ],
            [
                'name'       => ['ar' => 'الاعدادات', 'en' => 'Settings'],
                'slug'        => 'settings',

                'route'       => '/settings',
                'icon'        => 'settings',
                'sort'        => 6,
            ],
            [
                'name'       => ['ar' => 'الخصومات', 'en' => 'Discounts'],
                'slug'        => 'discounts',
                'route'       => '/discounts',
                'icon'        => 'discounts',
                'sort'        => 8,
            ],
            [
                'name'       => ['ar' => 'التطبيقات', 'en' => 'Applications'],
                'slug'        => 'applications',
                'route'       => '/applications',
                'icon'        => 'applications',
                'sort'        => 8,
            ],
        ],
    ],
];
