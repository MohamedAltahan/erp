<?php

namespace Modules\AccountTree\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Common\Traits\Filterable;
use Modules\Common\Traits\HasLocalizedName;
use Spatie\Translatable\HasTranslations;

class AccountTree extends Model
{
    use Filterable;
    use HasFactory;
    use HasLocalizedName;
    use HasTranslations;
    use NodeTrait;

    public $translatable = ['description'];

    protected $fillable = [
        'account_code',
        'account_nature',
        'account_category',
        'allow_delete',
        'is_active',
        'name_ar',
        'name_en',
        'parent_id',
        'description',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
    ];

    // accessors
    public function getAccountNatureAttribute($value)
    {
        return __($value);
    }
}
