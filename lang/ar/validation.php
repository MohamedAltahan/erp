<?php

return [
    'accepted' => 'يجب قبول :attribute.',
    'phone' => ':attribute يجب ان يحتوى على رقم جوال صحيح.',
    'active_url' => ':attribute لا يُمثّل رابطًا صحيحًا.',
    'after' => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي :attribute سوى على حروف.',
    'alpha_dash' => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array' => 'يجب أن يكون :attribute ًمصفوفة.',
    'attached' => ':attribute تم إرفاقه بالفعل.',
    'before' => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'enum' => 'القيمة المحددة لـ :attribute غير صحيح/ه.',
    'between' => [
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'string' => 'يجب أن يكون عدد حروف :attribute بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false .',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute.',
    'date' => ':attribute ليس تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام.',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values',
    'exists' => 'القيمة المحددة لـ :attribute غير موجود/ة.',
    'file' => 'الـ :attribute يجب أن يكون ملفا.',
    'filled' => ':attribute إجباري.',
    'gt' => [
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'string' => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا.',
    ],
    'image' => 'يجب أن يكون :attribute صورةً.',
    'in' => ':attribute غير موجود.',
    'in_array' => ':attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون :attribute نصًا من نوع JSON.',
    'lt' => [
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'string' => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا.',
    ],
    'lte' => [
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :value حروفٍ/حرفًا.',
    ],
    'max' => [
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا.',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا.',
    ],
    'multiple_of' => ':attribute يجب أن يكون من مضاعفات :value',
    'not_in' => 'العنصر :attribute غير صحيح.',
    'not_regex' => 'صيغة :attribute غير صحيحة.',
    'numeric' => 'يجب على :attribute أن يكون رقمًا.',
    'password' => 'كلمة المرور غير صحيحة.',
    'current_password' => 'كلمة المرور الحالية غير صحيحة',
    'present' => 'يجب تقديم :attribute.',
    'prohibited' => ':attribute محظور.',
    'prohibited_if' => ':attribute محظور إذا كان :other هو :value.',
    'prohibited_unless' => ':attribute محظور ما لم يكن :other ضمن :values.',
    'regex' => 'صيغة :attribute .غير صحيحة.',
    'relatable' => ':attribute قد لا يكون مرتبطا بالمصدر المحدد.',
    'required' => 'ادخل :attribute ',
    'required_if' => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all' => ':attribute مطلوب إذا توفّر :values.',
    'required_without' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط.',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size.',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل في تحميل الـ :attribute.',
    'url' => 'صيغة الرابط :attribute غير صحيحة.',
    'uuid' => ':attribute يجب أن يكون بصيغة UUID سليمة.',
    'the provided :attribute is not valid' => 'القيمة المعطاه لـ :attribute غير صحيحه.',
    'the provided :attribute must be different from the current financial equation ID' => 'لا يمكن اضافة المعادلة داخل نفسها',
    'discount_amount must be less than the product of quantity and price.' => 'قيمة الخصم للمنتج يجب أن يكون أقل من حاصل ضرب الكمية والسعر.',


    /*
  |--------------------------------------------------------------------------
  | Custom Validation Language Lines
  |--------------------------------------------------------------------------
  |
  | Here you may specify custom validation messages for attributes using the
  | convention "attribute.rule" to name the lines. This makes it quick to
  | specify a specific custom language line for a given attribute rule.
  |
  */
    'max_customer_installment_amount' => ':attribute اكبر من الحد الأقصى للآجل للعميل هو :amount',
    'the :attribute not valid, max pied amount is :total' => ':attribute غير صحيحه, اقصى حد للدفع هو :total',
    'the :attribute not valid, :value , valid remaining amount is :remainingAmount' => ':attribute غير صحيح, :value , القيمة المتبيقية الصحيحه هي :remainingAmount',
    ':attribute not valid, :value , valid remaining amount is :remainingAmount' => ':attribute غير صحيح, :value , اقصى حد للدفع هو :remainingAmount',
    'column name not found' => 'اسم العمود :name غير موجود',
    'snake-characters-lodash' => 'يجب أن تكون :attribute أحرفًا إنجليزية صغيرة وشرطات فقط',
    'reserved-characters' => 'لا يمكنك استخدام هذا الاسم :attribute',
    'no special characters' => ':attribute يجب ان يحتوى فقط على حروف وارقام ومسافات',
    'invalid api key' => 'مفتاح الدخول غير صحيح',
    'this feature not accessible' => 'هذه الميزة لا يمكن الوصول إليها',
    'cant use cash customer to sale with installment payment' => 'لا يمكن الدفع الآجل للعميل النقدى',
    'There was an error on row number :row :value. :message' => 'حدث خطأ في الصف رقم :row (:value). :message',
    'the customer :customer not allow to pay with arrears' => 'العميل :customer غير مسموح له الشراء بالمتأخرات',
    'cant add voucher withdraw because not enough balance in treasury account' => 'لا يمكن اضافة سند الصرف لعدم وجود رصيد كافى فى الخزينة',

    'this-category-is-main-category-and-cannot-be-assigned-as-child' => 'هذه الفئة هي الفئة الرئيسية ولا يمكن تعيينها كفئة فرعية',
    'customer not allow to pay with arrears' => 'العميل غير مسموح له الشراء بالآجل',
    'invalid_parent_id' => ':attribute غير صحيح',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'start_date' => [
            'required' => 'تاريخ البداية مطلوب',

        ],
        'end_date' => [
            'required' => 'تاريخ النهاية مطلوب',
        ],

    ],
    'the :value account is not in the :slug link' => ' :value غير موجود في الربط :slug',
    'unique_section_items' => 'قيم العناصر للقسم الواحد يجب ألا تكون مكررة.',
    'this invoice was refunded before' => 'هذه الفاتورة مرتجعة من قبل',
    'this invoice not found' => 'هذه الفاتورة غير موجودة',
    'low_customer_installment_amount' => 'لقد تجاوزت الحد الاقصي المسموح به',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'branch_id' => 'الفرع',
        'payment_type' => 'نوع الدفع',
        'treasury_account' => 'حساب الخزينة',
        'is_active' => 'حالة التفعيل',
        'applications_section_image' => 'صورة القسم',
        "choose_daily_date" => "اختار التاريخ",
        "is_default" => "القيمة الافتراضية",
        "name.ar" => "الإسم بالعربية",
        "name.en" => "الإسم بالأنجليزية",
        'invoice_serial' => 'رقم الفاتورة',
        'phone' => 'رقم الجوال',
        'address' => 'العنوان',
        'account' => 'الحساب',
        'tenancy_slug' => 'اسم المتجر',
        'status' => 'الحالة',
        'allow_delete' => 'قابل للحذف',
        'paid_amount' => 'القيمة المدفوعة',
        'age' => 'العمر',
        'items' => 'المنتجات',
        'available' => 'مُتاح',
        'city' => 'المدينة',
        'content' => 'المُحتوى',
        'country' => 'الدولة',
        'customer_id' => 'العميل',
        'date' => 'التاريخ',
        'treasury_account' => 'حساب الخزينة',
        'day' => 'اليوم',
        'description' => 'الوصف',
        'email' => 'البريد الالكتروني',
        'excerpt' => 'المُلخص',
        'first_name' => 'الاسم الأول',
        'gender' => 'النوع',
        'hour' => 'ساعة',
        'last_name' => 'اسم العائلة',
        'minute' => 'دقيقة',
        'mobile' => 'الجوال',
        'month' => 'الشهر',
        'name' => 'الاسم',
        'provider_inv_number' => 'رقم فاتورة المورد',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'phone' => 'الجوال',
        'second' => 'ثانية',
        'stock_id' => 'رقم المخزون',
        'sex' => 'الجنس',
        'size' => 'الحجم',
        'time' => 'الوقت',
        'title' => 'العنوان',
        'username' => 'اسم المُستخدم',
        'year' => 'السنة',
        'mo_from' => 'الفترة الصباحية تبدأ من',
        'mo_to' => 'الفترة الصباحية تنتهى فى',
        'mo_home_order_count' => 'عدد طلبات الفترة الصباحية فى المنزل',
        'mo_salone_order_count' => 'عدد طلبات الفترة الصباحية فى الصالون',
        'ev_from' => 'الفترة المسائية تبدأ من',
        'ev_to' => 'الفترة المسائية تنتهى فى',
        'ev_home_order_count' => 'عدد طلبات الفترة المسائية فى المنزل',
        'ev_salone_order_count' => 'عدد طلبات الفترة المسائية فى الصالون',
        'to' => 'إلى',
        'from' => 'من',
        'pay_percentage' => 'نسبة الدفع  للطلب ( % )',
        'vat' => 'ضريبة القيمة المضافة ( % )',
        'application_ratio' => 'نسبة التطبيق ( % )',
        'financial_price' => 'الغرامة المالية',
        'image' => 'الصورة',
        'balance' => 'المبلغ',
        'ar.title' => 'العنوان بالعربى',
        'en.title' => 'العنوان بالإنجليزى',
        'ar.keywords' => 'الكلمات الدالة بالعربى',
        'en.keywords' => 'الكلمات الدالة بالإنجليزى',
        'ar.description' => 'الوصف بالعربى',
        'en.description' => 'الوصف بالإنجليزى',
        'bid_price' => 'سعر المزايدة',
        'adv_period' => 'مدة المزاد المحدد بالأيام',
        'min_wallet' => 'الحد الأدنى للمحفظة',
        'currency' => 'العملة',
        'appstore' => 'متجر التطبيقات',
        'googleplay' => 'تطبيقات جوجل',
        'logo' => 'الشعار',
        'whatsapp' => 'الواتس اب',
        'auction_date' => 'تاريخ يوم المزاد المباشر',
        'auction_start_time' => 'وقت بدء المزاد المباشر',
        'auction_end_time' => 'وقت انتهاء المزاد المباشر',
        'now' => 'الاًن',
        'type' => 'النوع',
        'photographer_price' => 'سعر التصوير',
        'answers.ar.0' => 'الإجابة بالعربى',
        'answers.en.0' => 'الإجابة بالإنجليزى',
        'user_address_id' => 'عنوان المستخدم',
        'payment type' => 'نوع الدفع',
        'payment_method' => 'طريقة الدفع',
        'payment_status' => 'حالة الدفع',
        'payment_id' => 'رقم الدفع',
        'payment_date' => 'تاريخ الدفع',
        'payment_amount' => 'مبلغ الدفع',
        'payment_currency' => 'عملة الدفع',
        'inventory_id' => 'رقم المخزن',
        'inventory_name' => 'اسم المخزن',
        'inventory_type' => 'نوع المخزن',
        'inventory_status' => 'حالة المخزن',
        'discount_amount' => 'مبلغ الخصم للمنتج',
        'tax_percentage' => 'نسبة الضريبة',
        'tax_amount' => 'مبلغ الضريبة',
        'subtotal' => 'القيمة',
        'total' => 'الاجمالي',
        'remaining_amount' => 'المبلغ المتبقي',
        'tenant' => 'المتجر',
        'tenant' => [
            'slug' => 'إسم المتجر',
            'phone' => 'رقم الجوال',
            'email' => ' الايميل',
            'username' => ' اسم المستخدم',
            'address' => ' العنوان',
            'description' => ' الوصف',
            'company_name' => 'اسم الشركة',
        ],
        'tenant_owner' => 'مالك المتجر',
        'tenant_owner' => [
            'username' => ' اسم المستخدم',
            'email' => ' الايميل',
            'phone' => 'رقم الجوال',
            'password' => 'رقم الجوال',
        ],
        'subscription' => 'الاشتراكات',
        'subscription.package_id' => 'الباقة',
        'discounts.*' => 'الخصومات',
        'items.*' => 'المنتجات',
        'items.*.serial' => 'الرقم التسلسلي للمنتج',
        'items.*.item_id' => 'رقم المنتج',
        'items.*.title' => 'اسم المنتج',
        'items.*.quantity' => 'كمية المنتج',
        'items.*.price' => 'سعر المنتج',
        'items.*.cost' => 'تكلفة المنتج',
        'items.*.sale_price' => 'السعر المخفض للمنتج',
        'items.*.product_tax' => 'الضريبة المضافة للمنتج',
        'items.*.tax_percentage' => 'النسبة الضريبة للمنتج',
        'items.*.tax_amount' => 'الضريبة المضافة للمنتج',
        'items.*.discount_percentage' => 'نسبة الخصم للمنتج',
        'items.*.discount_amount' => 'مبلغ الخصم للمنتج',
        'items.*.subtotal' => 'القيمة للمنتج',
        'items.*.total' => 'الاجمالي للمنتج',
        'items.*.has_attributes' => 'المنتج يحتوى على اختلافات',
        'items.*.variation_id' => 'رقم اختلاف المنتج',
        'items.*.note' => 'ملاحظات',
        'items.*.data' => 'بيانات المنتج',
        'items.*.unit_key' => 'وحدة المنتج',
        'resource_data.items.*' => 'المنتجات',
        'resource_data.items.*.serial' => 'الرقم التسلسلي للمنتج',
        'resource_data.items.*.item_id' => 'رقم المنتج',
        'resource_data.items.*.title' => 'اسم المنتج',
        'resource_data.items.*.quantity' => 'كمية المنتج',
        'resource_data.items.*.price' => 'سعر المنتج',
        'resource_data.items.*.sale_price' => 'السعر المخفض للمنتج',
        'resource_data.items.*.product_tax' => 'الضريبة المضافة للمنتج',
        'resource_data.items.*.tax_percentage' => 'النسبة الضريبة للمنتج',
        'resource_data.items.*.tax_amount' => 'الضريبة المضافة للمنتج',
        'resource_data.items.*.discount_percentage' => 'نسبة الخصم للمنتج',
        'resource_data.items.*.discount_amount' => 'مبلغ الخصم للمنتج',
        'resource_data.items.*.subtotal' => 'القيمة للمنتج',
        'resource_data.items.*.total' => 'الاجمالي للمنتج',
        'resource_data.items.*.has_attributes' => 'المنتج يحتوى على اختلافات',
        'resource_data.items.*.variation_id' => 'رقم اختلاف المنتج',
        'resource_data.items.*.note' => 'ملاحظات',
        'resource_data.items.*.data' => 'بيانات المنتج',
        'main_account.account' => 'الحساب الرئيسي',
        'main_account.note' => 'ملاحظات الحساب الرئيسي',
        'main_account.date' => 'تاريخ الحساب الرئيسي',
        'data.*.account.account' => 'حسابات القيد',
        'data.*.account' => 'حسابات القيد',
        'note' => 'الملاحظات',
        'quantity' => 'الكمية',
        'usage_limit' => 'عدد المستخدمين المسموح به',
        'tree_account' => 'الحساب',
        'title.*' => 'الإسم',
        'description.*' => 'الوصف',
        'title.ar' => 'العنوان بالعربى',
        'title.en' => 'العنوان بالإنجليزى',
        'description.ar' => 'الوصف بالعربى',
        'description.en' => 'الوصف بالإنجليزى',
        'unit' => 'وحده',
        'unit_key' => 'وحده',
        'product_unit' => 'وحدة المنتج',
        'key' => 'وحدة المنتج',
        'from_inventory_id' => 'من مخزن',
        'to_inventory_id' => 'الى مخزن',
        'locale' => 'كود اللغة',
        'permission' => 'الصلاحية',
        'permission.*' => 'الصلاحية',
        'permissions' => 'الأذونات',
        'role' => 'الدور',
        'roles.*' => 'الدور',
        'roles' => 'الأدوار',
        'account_nature' => 'طبيعة الحساب',
        'type_id' => 'نوع الحساب',
        'tax_id' => 'نوع الضريبة',
        'account_type' => 'نوع الحساب',
        'account_type_id' => 'نوع الحساب',
        'tax_type' => 'نوع الضريبة',
        'tax_type_id' => 'نوع الضريبة',
        'account_status' => 'حالة الحساب',
        'account_status_id' => 'حالة الحساب',
        'currency_id' => 'عملة الحساب',
        'tax_num' => 'الرقم الضريبي',
        'serial' => 'الرقم التسلسلي',
        'parent_id' => 'القسم الرئيسى',
        'payment_account' => 'حساب الدفع',
        'items.*.mathematics_operator' => 'المعامل الرياضى',
        'items.*.account' => 'الحساب',
        'items.*.reference_id' => 'معرف العنصر',
        'items.*.reference_type' => 'نوع العنصر',
        'items.*.discount_amount' => '',
        'equation_items' => 'عناصر المعادلة',
        'account_tree_id' => 'رقم الحساب',
        'product_unit_key' => 'وحدة المنتج',
        'sale_price' => 'سعر التخفيض',
        'invoice_date' => 'تاريخ الفاتورة',
        'provider_id' => 'رقم المورد',
        'amount' => 'الرصيد',
        'total_amount' => 'التكلفة الإجمالية',
        'package_items' => 'عناصر الباقة',
        'items.*.product_serial' => 'الرقم التسلسلي للمنتج',
        'items.*.product_id' => 'المنتج',
        'invoice_id' => 'رقم الفاتورة',
        'start_date' => 'الخاص بالبداية',
        'end_date' => 'تاريخ النهاية',
        'financial_year_slug' => 'السنة المالية',
        'payment_record' => 'الفاتورة',
        'building_number' => 'رقم المبنى',
        'tenant.phone' => 'رقم الجوال',
        'tenant_owner.phone' => 'رقم الجوال ',
        'tenant.email' => 'البريد الإلكتروني',
        'tenant_owner.email' => 'البريد الإلكتروني ',
        'payment.transaction_reference' => 'طريقة الدفع',
        'payment.callback_url' => 'رابط التحويل',
        'payment.source.name' => 'الأسم',
        'payment.source.number' => 'رقم البطاقة',
        'payment.source.month' => 'الشهر',
        'payment.source.year' => 'السنة',
        'payment.source.cvc' => 'الرقم الثلاثي السري',
        'payment.source.type' => 'نوع الدفع',
        'price' => 'السعر',
        'csr_common_name' => 'الاسم العام',
        'csr_serial_number' => 'الرقم التسلسلي',
        'csr_organization_identifier' => 'معرف الجهة',
        'csr_organization_unit_name' => 'اسم الوحدة',
        'csr_organization_name' => 'اسم الجهة',
        'csr_country_name' => 'البلد',
        'csr_invoice_type' => 'نوع الفاتورة',
        'csr_location_address' => 'عنوان الموقع',
        'csr_industry_business_category' => 'فئة الصناعة',
        'egs_serial_number' => 'الرقم التسلسلي',
        'email_address' => 'البريد الالكتروني',
        'tax_number' => 'الرقم الضريبي',
        'private_key_base64' => 'مفتاح خاص',
        'public_key_base64' => 'مفتاح عام',
        'csr_base64' => 'الشهادة الضريبية',
        'request_id' => 'رقم الطلب',
        'disposition_message' => 'رسالة القبول',
        'binary_security_token' => 'رمز الحماية البينري',
        'secret' => 'سر',
        'is_connected' => 'حالة الاتصال',
        'registration_name' => 'اسم التسجيل',
        'registration_number' => 'رقم التسجيل',
        'postal_number' => 'الرقم البريدي',
        'street_name' => 'اسم الشارع',
        'building_number' => 'رقم المبنى',
        'plot_identification' => 'معرف القطعة',
        'city_subdivision_name' => 'اسم المنطقة',
        'city' => 'المدينة',
        'mode' => 'الوضع',
        'csid_status' => 'حالة CSID',
        'inventory_account' => 'مخزون الحساب',
        'customer_account' => 'حساب_العميل',
        'host' => 'الاستضافة',
        'port' => 'المنفذ',
        'root_path' => 'المسار الرئيسى',
        'sale_invoices_path' => 'مسار فواتير البيع',
        'is_business' => 'هل هو شركة',
        'price_before_discount' => 'السعر قبل الخصم',
        'code' => 'الكود',
        'max_use_per_person' => 'حد الأستخدام الأقصي لكل مستخدم',
        'discount_type' => 'نوع الخصم',
        'discount_value' => 'قيمة الخصم',
        'start_date' => 'تاريخ البدء',
        'end_date' => 'تاريخ الانتهاء',
        'model_type' => 'نوع الخدمة',
        'model_id' => 'رقم الخدمة',
    ],
    'slug' => 'المٌعرف مستخدم من قبل',
    'invalid_period' => 'لا يجب ان تزيد المدة عن 3 شهور',
    'vat_number' => 'الرقم الضريبي غير صالح, يرجى تقديم رقم ضريبي صالح من 15 رقم ويجب أن يبدأ وينتهي برقم 3',
    'the tax :value is not available' => 'الضريبة :value غير متوفرة',
    'The product quantity must be less than or equal the inventory quantity.' => 'يجب أن تكون كمية المنتج أقل من أو تساوي كمية المخزون.',

    // Zatca
    'zatca' => [
        'unique' => 'هذه الفاتورة موجودة مسبقاَ في جدول تكامل هيئة الزكاه والضريبة',
    ],

    'financial_year' => [
        'only_one_active' => 'يمكن أن يكون هناك سنة مالية واحدة فقط بالحالة نشط',
    ],

    'unique_within_package' => 'The slug must be unique within this package.',

    'cannot_delete_parent' => 'لا يمكنك حذف الحساب الرئيسي لأنه يحتوي على حسابات فرعية.',


    'package' => [
        'unique_within_package' => 'هذه الميزة مضافة بالفعل إلى الحزمة، لا يمكن تكرارها.',
    ]
];
