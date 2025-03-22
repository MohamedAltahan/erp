<?php

namespace Modules\Branch\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Common\Traits\Filterable;
use Modules\Common\Traits\HasLocalizedName;
use Spatie\Translatable\HasTranslations;

// use Modules\$MODULE$\Database\Factories\$NAME$Factory;

class Branch extends Model
{
    use HasFactory, HasTranslations, HasLocalizedName, Filterable;

    public $timestamps = false;

    protected $translatable = ['description', 'address'];

    protected $fillable = ['name_ar', 'name_en', 'description', 'address', 'status', 'phone', 'created_at'];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'address' => 'array',

    ];
}
