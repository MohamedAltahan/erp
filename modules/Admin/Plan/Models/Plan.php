<?php

namespace Modules\Admin\Plan\Models;

use Modules\Common\Models\BaseModel;

class Plan extends BaseModel
{
    public $translatable = ['name', 'description', 'features'];

    // protected $fillable = [];
    protected $guarded = [];

    protected $casts = [
        'features' => 'array',
        'limits' => 'array',
        'permissions' => 'array',
        'sidebar_items' => 'array',
        'name' => 'array',
    ];
}
