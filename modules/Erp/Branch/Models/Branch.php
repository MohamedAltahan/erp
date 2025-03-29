<?php

namespace Modules\Erp\Branch\Models;

use Modules\Erp\Common\Models\BaseModel;

class Branch extends BaseModel
{
    public $timestamps = false;

    protected $translatable = ['description', 'address'];

    protected $fillable = ['name_ar', 'name_en', 'description', 'address', 'status', 'phone', 'created_at'];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'address' => 'array',

    ];
}
